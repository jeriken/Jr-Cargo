<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-visit",
  *      operationId="browseDataVisit",
  *      tags={"data-visit"},
  *      summary="Browse Data Visit",
  *      description="Returns list of Data Visit",
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
  *      path="/v1/entities/data-visit/read?slug=data-visit&id={id}",
  *      operationId="readDataVisit",
  *      tags={"data-visit"},
  *      summary="Get Data Visit based on id",
  *      description="Returns Data Visit based on id",
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
  *      path="/v1/entities/data-visit/add",
  *      operationId="addDataVisit",
  *      tags={"data-visit"},
  *      summary="Insert new Data Visit",
  *      description="Insert new Data Visit into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"userId":"", "custDate":"Abc", "custKab":"Abc", "custKec":"Abc", "custKel":"Abc", "custAlamat":"Abc", "custKlas":"Abc", "usahaBentuk":"Abc", "usahaEkspedisi":"Abc", "usahaNama":"Abc", "usahaKategori":"Abc", "picNama":"Abc", "picNo":"Abc", "jualScope":"Abc", "kemasanKlas":"Abc", "kemasanJenis":"Abc", "barangKategori":"Abc", "barangTujuan":"Abc", "barangTujuanSering":"Abc", "barangUkuran":"Abc", "barangFoto":"Abc", "kirimModel":"Abc", "kirimEkspedisi":"Abc", "kirimEstimasi":"123", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "bayarMetode":"Abc", "layananCod":"Abc", "layananCutoff":"Abc", "layananLibur":"Abc", "layananKhusus":"Abc", "partnerStatus":"Abc", "partnerLevel":"Abc"},
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
  *      path="/v1/entities/data-visit/edit",
  *      operationId="editDataVisit",
  *      tags={"data-visit"},
  *      summary="Edit an existing Data Visit",
  *      description="Edit an existing Data Visit",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"custDate":"Abc", "custKab":"Abc", "custKec":"Abc", "custKel":"Abc", "custAlamat":"Abc", "custKlas":"Abc", "usahaBentuk":"Abc", "usahaEkspedisi":"Abc", "usahaNama":"Abc", "usahaKategori":"Abc", "picNama":"Abc", "picNo":"Abc", "jualScope":"Abc", "kemasanKlas":"Abc", "kemasanJenis":"Abc", "barangKategori":"Abc", "barangTujuan":"Abc", "barangTujuanSering":"Abc", "barangUkuran":"Abc", "barangFoto":"Abc", "kirimModel":"Abc", "kirimEkspedisi":"Abc", "kirimEstimasi":"123", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "bayarMetode":"Abc", "layananCod":"Abc", "layananCutoff":"Abc", "layananLibur":"Abc", "layananKhusus":"Abc", "partnerStatus":"Abc", "partnerLevel":"Abc"},
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
  *      path="/v1/entities/data-visit/delete",
  *      operationId="deleteDataVisit",
  *      tags={"data-visit"},
  *      summary="Delete one record of Data Visit",
  *      description="Delete one record of Data Visit",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-visit",
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
  *      path="/v1/entities/data-visit/delete-multiple",
  *      operationId="deleteMultipleDataVisit",
  *      tags={"data-visit"},
  *      summary="Delete multiple record of Data Visit",
  *      description="Delete multiple record of Data Visit",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-visit",
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
  *      path="/v1/entities/data-visit/sort",
  *      operationId="sortDataVisit",
  *      tags={"data-visit"},
  *      summary="Sort existing Data Visit",
  *      description="Sort existing Data Visit",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-visit",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "userId":"", "custDate":"Abc", "custKab":"Abc", "custKec":"Abc", "custKel":"Abc", "custAlamat":"Abc", "custKlas":"Abc", "usahaBentuk":"Abc", "usahaEkspedisi":"Abc", "usahaNama":"Abc", "usahaKategori":"Abc", "picNama":"Abc", "picNo":"Abc", "jualScope":"Abc", "kemasanKlas":"Abc", "kemasanJenis":"Abc", "barangKategori":"Abc", "barangTujuan":"Abc", "barangTujuanSering":"Abc", "barangUkuran":"Abc", "barangFoto":"Abc", "kirimModel":"Abc", "kirimEkspedisi":"Abc", "kirimEstimasi":"123", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "bayarMetode":"Abc", "layananCod":"Abc", "layananCutoff":"Abc", "layananLibur":"Abc", "layananKhusus":"Abc", "partnerStatus":"Abc", "partnerLevel":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "userId":"", "custDate":"Abc", "custKab":"Abc", "custKec":"Abc", "custKel":"Abc", "custAlamat":"Abc", "custKlas":"Abc", "usahaBentuk":"Abc", "usahaEkspedisi":"Abc", "usahaNama":"Abc", "usahaKategori":"Abc", "picNama":"Abc", "picNo":"Abc", "jualScope":"Abc", "kemasanKlas":"Abc", "kemasanJenis":"Abc", "barangKategori":"Abc", "barangTujuan":"Abc", "barangTujuanSering":"Abc", "barangUkuran":"Abc", "barangFoto":"Abc", "kirimModel":"Abc", "kirimEkspedisi":"Abc", "kirimEstimasi":"123", "layananKeluhan":"Abc", "layananPerbaikan":"Abc", "bayarMetode":"Abc", "layananCod":"Abc", "layananCutoff":"Abc", "layananLibur":"Abc", "layananKhusus":"Abc", "partnerStatus":"Abc", "partnerLevel":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="userId"), 
  *                         @OA\Property(type="string", property="custDate"), 
  *                         @OA\Property(type="string", property="custKab"), 
  *                         @OA\Property(type="string", property="custKec"), 
  *                         @OA\Property(type="string", property="custKel"), 
  *                         @OA\Property(type="string", property="custAlamat"), 
  *                         @OA\Property(type="string", property="custKlas"), 
  *                         @OA\Property(type="string", property="usahaBentuk"), 
  *                         @OA\Property(type="string", property="usahaEkspedisi"), 
  *                         @OA\Property(type="string", property="usahaNama"), 
  *                         @OA\Property(type="string", property="usahaKategori"), 
  *                         @OA\Property(type="string", property="picNama"), 
  *                         @OA\Property(type="string", property="picNo"), 
  *                         @OA\Property(type="string", property="jualScope"), 
  *                         @OA\Property(type="string", property="kemasanKlas"), 
  *                         @OA\Property(type="string", property="kemasanJenis"), 
  *                         @OA\Property(type="string", property="barangKategori"), 
  *                         @OA\Property(type="string", property="barangTujuan"), 
  *                         @OA\Property(type="string", property="barangTujuanSering"), 
  *                         @OA\Property(type="string", property="barangUkuran"), 
  *                         @OA\Property(type="string", property="barangFoto"), 
  *                         @OA\Property(type="string", property="kirimModel"), 
  *                         @OA\Property(type="string", property="kirimEkspedisi"), 
  *                         @OA\Property(type="integer", property="kirimEstimasi"), 
  *                         @OA\Property(type="string", property="layananKeluhan"), 
  *                         @OA\Property(type="string", property="layananPerbaikan"), 
  *                         @OA\Property(type="string", property="bayarMetode"), 
  *                         @OA\Property(type="string", property="layananCod"), 
  *                         @OA\Property(type="string", property="layananCutoff"), 
  *                         @OA\Property(type="string", property="layananLibur"), 
  *                         @OA\Property(type="string", property="layananKhusus"), 
  *                         @OA\Property(type="string", property="partnerStatus"), 
  *                         @OA\Property(type="string", property="partnerLevel"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
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