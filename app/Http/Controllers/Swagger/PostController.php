<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *     path="/api/posts",
 *     summary="Create post",
 *     tags={"Posts"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\RequestBody(
 *        @OA\JsonContent(
 *          allOf={
 *              @OA\Schema(
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=10),
 *              )
 *          }
 *        )
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *                  @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=10),
 *             )
 *          ),
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/posts",
 *     summary="List posts",
 *     tags={"Posts"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *                  @OA\Property(property="data", type="array", @OA\Items(
 *                      @OA\Property(property="id", type="integer", example=1),
 *                      @OA\Property(property="title", type="string", example="Some title"),
 *                      @OA\Property(property="likes", type="integer", example=10),
 *                  )),
 *             )
 *          ),
 *     )
 * ),
 *
 * @OA\Get(
 *     path="/api/posts/{post}",
 *     summary="Show post",
 *     tags={"Posts"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="Post id",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *                  @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=10),
 *             )
 *          ),
 *     )
 * ),
 *
 * @OA\Patch(
 *     path="/api/posts/{post}",
 *     summary="Update post",
 *     tags={"Posts"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="Post id",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=2
 *     ),
 *
 *     @OA\RequestBody(
 *        @OA\JsonContent(
 *          allOf={
 *              @OA\Schema(
 *                  @OA\Property(property="title", type="string", example="Some title for edit"),
 *                  @OA\Property(property="likes", type="integer", example=10),
 *              )
 *          }
 *        )
 *     ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *                  @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="title", type="string", example="Some title"),
 *                  @OA\Property(property="likes", type="integer", example=10),
 *             )
 *          ),
 *     )
 * ),
 *
 * @OA\Delete(
 *     path="/api/posts/{post}",
 *     summary="Delete post",
 *     tags={"Posts"},
 *     security={{ "bearerAuth": {} }},
 *     @OA\Parameter(
 *         description="Post id",
 *         in="path",
 *         name="post",
 *         required=true,
 *         example=1
 *     ),
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *                  @OA\Property(property="message", type="string", example="done"),
 *             )
 *          ),
 *     )
 * ),
 *
 */
class PostController extends Controller
{

}
