<?php


namespace App\Http\Controllers\Requests;


use App\Http\Controllers\Controller;
use http\Env\Request;

class PBOfficeController extends Controller
{

    /**
     * The service is closed since August 31, 2022
     */
    private function getData(){}

    /**
     * @return mixed
     */
    private function fakeData(): array
    {
        return json_decode('[
          {
            "name":"Отделение №109 Днепроперовского РУ",
            "state":"Днепропетровская",
            "id":"2457",
            "country":"Украина",
            "city":"Днепропетровск",
            "index":"49000",
            "phone":"(380) 56 3717097",
            "email":"drpbank.com.ua",
            "address":"ул Героев Сталинграда 15"
          },
          {
            "name":"Отделение №213",
            "state":"Днепропетровская",
            "id":"2453",
            "country":"Украина",
            "city":"Днепропетровск",
            "index":"49000",
            "phone":"8(056)716-51-33, 8(056)716-51-34",
            "email":"drpbank.com.ua",
            "address":"ж/м Сокол 1"
          }
        ]', true);
    }

    public function retrieveOfficesData()
    {
        return response()->json($this->fakeData());
    }
}
