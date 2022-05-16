<?php
namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
trait ApiResponser
{
  //get success response
   private function successResponse($data,$code){
    return response()->json($data,$code);
  }
  //get error response
  protected function errorResponse($message,$code){
   return response()->json([ 'error'=>$message,'code' =>$code], $code);
  }
  //select all from the model
  protected function showAll(Collection $collection, $code = 200)
  {
     if($collection->isEmpty()){
       return $this->successResponse(['data'=>$collection],$code);
     }
      return $this->successResponse(['data' => $collection], $code);
  }
  //select one from the model
  protected function showOne(Model $model, $code = 200)
  {
      return $this->successResponse(['data' => $model], $code);
  }
}







