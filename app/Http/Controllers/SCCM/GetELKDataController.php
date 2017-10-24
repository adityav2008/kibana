<?php

namespace App\Http\Controllers\SCCM;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use Elasticsearch\ClientBuilder;
use App\Model\SCCMPatchDetail;

class GetELKDataController extends Controller
{
    public function index(Request $request)
    {
        $this->sccmData();
    }

    public function sccmData(){
        $hosts = ['172.16.0.200:9203'];
        $client = ClientBuilder::create()->setHosts($hosts)->build();
        $mapping_params = ['index' => 'sccm'];
        $mapping = $client->indices()->getMapping($mapping_params);
        $raw_columns = $mapping['sccm']['mappings']['sccm_critical_patch']['properties'];
        foreach($raw_columns as $key => $value)
        {
            if(!Schema::hasColumn('s_c_c_m_patch_details', $key))
            {
                if($value['type'] == 'string')
                {
                    if($key == 'Update_Description')
                    {
                        Schema::table('s_c_c_m_patch_details', function($table) use($key){
                               $table->text($key)->nullable();
                           });
                    }
                    else
                    {
                        Schema::table('s_c_c_m_patch_details', function($table) use($key){
                               $table->string($key)->nullable();
                           });
                    }

                }
                if($value['type'] == 'date')
                {
                    Schema::table('s_c_c_m_patch_details', function($table) use($key){
                           $table->date($key)->nullable();
                       });
                }
            }
        }
        $count_params = [
                    "index" => "sccm",
                    "body" => [
                        "query" => [
                            "match_all" => []
                        ]
                    ]
                ];
        $response = $client->count($count_params);
        $params = [
                    "index" => "sccm",
                    "body" => [
                        "query" => [
                            "match_all" => []
                        ]
                    ],
                    "size"=>$response['count']
                ];
        $response = $client->search($params);
        foreach($response['hits']['hits'] as $data)
        {
            unset($data['_source']['Status']);
            unset($data['_source']['Superseded__0_NO___1_YES_']);
            unset($data['_source']['Expried__0_NO___1_YES_']);
            unset($data['_source']['Last_H_W_Inventory_Scan']);
            SCCMPatchDetail::insert($data['_source']);
        }
    }
}
