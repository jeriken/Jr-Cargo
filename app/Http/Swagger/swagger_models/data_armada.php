<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-armada",
  *      operationId="browseDataArmada",
  *      tags={"data-armada"},
  *      summary="Browse Data Armada",
  *      description="Returns list of Data Armada",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/data-armada/read?slug=data-armada&id={id}",
  *      operationId="readDataArmada",
  *      tags={"data-armada"},
  *      summary="Get Data Armada based on id",
  *      description="Returns Data Armada based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/data-armada/add",
  *      operationId="addDataArmada",
  *      tags={"data-armada"},
  *      summary="Insert new Data Armada",
  *      description="Insert new Data Armada into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"userId":"", "armadaUnit":"Abc", "armadaJenis":"Abc", "armadaNomor":"Abc", "armadaKm":"123", "armadaOutlet":"Abc", "kondisiBersih":"Abc", "kondisiBak":"Abc", "kondisiKabinEx":"Abc", "kondisiKabinIn":"Abc", "lampuRem":"Abc", "lampuSein":"Abc", "lampuHazard":"Abc", "lampuReverse":"Abc", "lampuKota":"Abc", "mesinSpeedo":"Abc", "mesinOli":"Abc", "mesinAccu":"Abc", "mesinRadiator":"Abc", "mesinFanbelt":"Abc", "mesinWipper":"Abc", "mesinOliRem":"Abc", "mesinRem":"Abc", "mesinIdle":"Abc", "mesinSteering":"Abc", "rodaKondisi":"Abc", "rodaDepanKanan":"Abc", "rodaDepanKananTambal":"Abc", "rodaDepanKananSuspensi":"Abc", "rodaDepanKiri":"Abc", "rodaDepanKiriTambal":"Abc", "rodaDepanKiriSuspensi":"Abc", "rodaBelKanan":"Abc", "rodaBelKananTambal":"Abc", "rodaBelKananSuspensi":"Abc", "rodaBelKiri":"Abc", "rodaBelKiriTambal":"Abc", "rodaBelKiriSuspensi":"Abc", "fotoKendala":"Abc", "fotoKanan":"Abc", "fotoKiri":"Abc", "dateService":"2021-01-01T00:00:00.000Z", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "status":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/data-armada/edit",
  *      operationId="editDataArmada",
  *      tags={"data-armada"},
  *      summary="Edit an existing Data Armada",
  *      description="Edit an existing Data Armada",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"userId":"", "armadaUnit":"Abc", "armadaJenis":"Abc", "armadaNomor":"Abc", "armadaKm":"123", "armadaOutlet":"Abc", "kondisiBersih":"Abc", "kondisiBak":"Abc", "kondisiKabinEx":"Abc", "kondisiKabinIn":"Abc", "lampuRem":"Abc", "lampuSein":"Abc", "lampuHazard":"Abc", "lampuReverse":"Abc", "lampuKota":"Abc", "mesinSpeedo":"Abc", "mesinOli":"Abc", "mesinAccu":"Abc", "mesinRadiator":"Abc", "mesinFanbelt":"Abc", "mesinWipper":"Abc", "mesinOliRem":"Abc", "mesinRem":"Abc", "mesinIdle":"Abc", "mesinSteering":"Abc", "rodaKondisi":"Abc", "rodaDepanKanan":"Abc", "rodaDepanKananTambal":"Abc", "rodaDepanKananSuspensi":"Abc", "rodaDepanKiri":"Abc", "rodaDepanKiriTambal":"Abc", "rodaDepanKiriSuspensi":"Abc", "rodaBelKanan":"Abc", "rodaBelKananTambal":"Abc", "rodaBelKananSuspensi":"Abc", "rodaBelKiri":"Abc", "rodaBelKiriTambal":"Abc", "rodaBelKiriSuspensi":"Abc", "fotoKendala":"Abc", "fotoKanan":"Abc", "fotoKiri":"Abc", "dateService":"2021-01-01T00:00:00.000Z", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "status":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/data-armada/delete",
  *      operationId="deleteDataArmada",
  *      tags={"data-armada"},
  *      summary="Delete one record of Data Armada",
  *      description="Delete one record of Data Armada",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-armada",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/data-armada/delete-multiple",
  *      operationId="deleteMultipleDataArmada",
  *      tags={"data-armada"},
  *      summary="Delete multiple record of Data Armada",
  *      description="Delete multiple record of Data Armada",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-armada",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="ids"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/data-armada/sort",
  *      operationId="sortDataArmada",
  *      tags={"data-armada"},
  *      summary="Sort existing Data Armada",
  *      description="Sort existing Data Armada",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-armada",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "userId":"", "armadaUnit":"Abc", "armadaJenis":"Abc", "armadaNomor":"Abc", "armadaKm":"123", "armadaOutlet":"Abc", "kondisiBersih":"Abc", "kondisiBak":"Abc", "kondisiKabinEx":"Abc", "kondisiKabinIn":"Abc", "lampuRem":"Abc", "lampuSein":"Abc", "lampuHazard":"Abc", "lampuReverse":"Abc", "lampuKota":"Abc", "mesinSpeedo":"Abc", "mesinOli":"Abc", "mesinAccu":"Abc", "mesinRadiator":"Abc", "mesinFanbelt":"Abc", "mesinWipper":"Abc", "mesinOliRem":"Abc", "mesinRem":"Abc", "mesinIdle":"Abc", "mesinSteering":"Abc", "rodaKondisi":"Abc", "rodaDepanKanan":"Abc", "rodaDepanKananTambal":"Abc", "rodaDepanKananSuspensi":"Abc", "rodaDepanKiri":"Abc", "rodaDepanKiriTambal":"Abc", "rodaDepanKiriSuspensi":"Abc", "rodaBelKanan":"Abc", "rodaBelKananTambal":"Abc", "rodaBelKananSuspensi":"Abc", "rodaBelKiri":"Abc", "rodaBelKiriTambal":"Abc", "rodaBelKiriSuspensi":"Abc", "fotoKendala":"Abc", "fotoKanan":"Abc", "fotoKiri":"Abc", "dateService":"2021-01-01T00:00:00.000Z", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "status":"Abc"}, {"id":"123", "userId":"", "armadaUnit":"Abc", "armadaJenis":"Abc", "armadaNomor":"Abc", "armadaKm":"123", "armadaOutlet":"Abc", "kondisiBersih":"Abc", "kondisiBak":"Abc", "kondisiKabinEx":"Abc", "kondisiKabinIn":"Abc", "lampuRem":"Abc", "lampuSein":"Abc", "lampuHazard":"Abc", "lampuReverse":"Abc", "lampuKota":"Abc", "mesinSpeedo":"Abc", "mesinOli":"Abc", "mesinAccu":"Abc", "mesinRadiator":"Abc", "mesinFanbelt":"Abc", "mesinWipper":"Abc", "mesinOliRem":"Abc", "mesinRem":"Abc", "mesinIdle":"Abc", "mesinSteering":"Abc", "rodaKondisi":"Abc", "rodaDepanKanan":"Abc", "rodaDepanKananTambal":"Abc", "rodaDepanKananSuspensi":"Abc", "rodaDepanKiri":"Abc", "rodaDepanKiriTambal":"Abc", "rodaDepanKiriSuspensi":"Abc", "rodaBelKanan":"Abc", "rodaBelKananTambal":"Abc", "rodaBelKananSuspensi":"Abc", "rodaBelKiri":"Abc", "rodaBelKiriTambal":"Abc", "rodaBelKiriSuspensi":"Abc", "fotoKendala":"Abc", "fotoKanan":"Abc", "fotoKiri":"Abc", "dateService":"2021-01-01T00:00:00.000Z", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "status":"Abc"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="userId"), 
  *                         @OA\Property(type="string", property="armadaUnit"), 
  *                         @OA\Property(type="string", property="armadaJenis"), 
  *                         @OA\Property(type="string", property="armadaNomor"), 
  *                         @OA\Property(type="integer", property="armadaKm"), 
  *                         @OA\Property(type="string", property="armadaOutlet"), 
  *                         @OA\Property(type="string", property="kondisiBersih"), 
  *                         @OA\Property(type="string", property="kondisiBak"), 
  *                         @OA\Property(type="string", property="kondisiKabinEx"), 
  *                         @OA\Property(type="string", property="kondisiKabinIn"), 
  *                         @OA\Property(type="string", property="lampuRem"), 
  *                         @OA\Property(type="string", property="lampuSein"), 
  *                         @OA\Property(type="string", property="lampuHazard"), 
  *                         @OA\Property(type="string", property="lampuReverse"), 
  *                         @OA\Property(type="string", property="lampuKota"), 
  *                         @OA\Property(type="string", property="mesinSpeedo"), 
  *                         @OA\Property(type="string", property="mesinOli"), 
  *                         @OA\Property(type="string", property="mesinAccu"), 
  *                         @OA\Property(type="string", property="mesinRadiator"), 
  *                         @OA\Property(type="string", property="mesinFanbelt"), 
  *                         @OA\Property(type="string", property="mesinWipper"), 
  *                         @OA\Property(type="string", property="mesinOliRem"), 
  *                         @OA\Property(type="string", property="mesinRem"), 
  *                         @OA\Property(type="string", property="mesinIdle"), 
  *                         @OA\Property(type="string", property="mesinSteering"), 
  *                         @OA\Property(type="string", property="rodaKondisi"), 
  *                         @OA\Property(type="string", property="rodaDepanKanan"), 
  *                         @OA\Property(type="string", property="rodaDepanKananTambal"), 
  *                         @OA\Property(type="string", property="rodaDepanKananSuspensi"), 
  *                         @OA\Property(type="string", property="rodaDepanKiri"), 
  *                         @OA\Property(type="string", property="rodaDepanKiriTambal"), 
  *                         @OA\Property(type="string", property="rodaDepanKiriSuspensi"), 
  *                         @OA\Property(type="string", property="rodaBelKanan"), 
  *                         @OA\Property(type="string", property="rodaBelKananTambal"), 
  *                         @OA\Property(type="string", property="rodaBelKananSuspensi"), 
  *                         @OA\Property(type="string", property="rodaBelKiri"), 
  *                         @OA\Property(type="string", property="rodaBelKiriTambal"), 
  *                         @OA\Property(type="string", property="rodaBelKiriSuspensi"), 
  *                         @OA\Property(type="string", property="fotoKendala"), 
  *                         @OA\Property(type="string", property="fotoKanan"), 
  *                         @OA\Property(type="string", property="fotoKiri"), 
  *                         @OA\Property(type="string", property="dateService"), 
  *                         @OA\Property(type="string", property="layananKeluhan"), 
  *                         @OA\Property(type="string", property="layananPerbaikan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"), 
  *                         @OA\Property(type="string", property="status"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */