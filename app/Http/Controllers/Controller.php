<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // 

    /**
     * --------------------------------
     *  Basic configuration for swagger
     * --------------------------------
     * @OA\Info(title="API Documentation", version="3.0.0")
     */

    /**
     * ------------------------------
     * JWT Authentication for swagger
     * ------------------------------
     * 
     * @OA\SecurityScheme(
     *   securityScheme="JWTHeaderAuthentication",
     *   type="apiKey",
     *   in="header",
     *   name="Authorization"
     * )
     */
    ## 1. Without token
    /**
     * @OA\Post(
     *   tags={"User"},
     *   path="/api/login",
     *   description="Use for login and create jwt token",
     *   operationId="userLogin",
     *   summary="User Login",
     *   @OA\Parameter(
     *      name="email_address",
     *      description="Email Address",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *            type="string",
     *        ),
     *   ),
     *    @OA\Parameter(
     *      name="password",
     *      description="Password",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *            type="string",
     *        ),
     *   ),
     *  @OA\Response(response = "200", description = "Success")
     *  )
     * ),
     */
    ## 2. Get
    /**
     * 
     * @OA\Get(
     *   path="/api/getAllUser",
     *   tags={"User"},
     *   description="Get the all users list",
     *   operationId="getAllUser",
     *   summary="Get's the list of all users",
     *   security={
     *         {"JWTHeaderAuthentication": {}}
     *    },
     *   @OA\Response(response="200", description="Success"),
     *   )
     * )
     * 
     */
    ## 3. Example with mandatory field
    /**
     * @OA\Get(
     *    path="/api/user/{user_id}",
     *    tags={"User"},
     *    description="Get the user by the id",
     *    operationId="getUserById",
     *    summary="Get the user by the id",
     *    @OA\Parameter(
     *         name="user_id",
     *         description="User id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *    ),
     *    security={
     *       {"JWTHeaderAuthentication": {}}
     *    },
     *    @OA\Response(
     *          response = "200", 
     *          description = "Success"
     *    )
     * )
     */
    ## 4. With Query Params 
    /**
     * @OA\Get(
     *    path="/api/user?user_id={id}",
     *    tags={"User"},
     *    description="Get the user by the id",
     *    operationId="getUserByQueryParams",
     *    summary="Get the user by the id",
     *    @OA\Parameter(
     *         name="id",
     *         description="User id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *    ),
     *    security={
     *       {"JWTHeaderAuthentication": {}}
     *    },
     *    @OA\Response(
     *          response = "200", 
     *          description = "Success"
     *    )
     * )
     */
    
    ## 5. PUT Method
    /**
     * @OA\Put(
     *   tags={"User"},
     *   path="/api/setPassword",
     *   description="use for reset the password",
     *   operationId="setPassword",
     *   summary="Reset Password",
     *   @OA\Parameter(
     *      name="password",
     *      description="Password",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *            type="string",
     *        ),
     *   ),
     * @OA\Parameter(
     *      name="token",
     *      description="User Token",
     *      required=true,
     *      in="query",
     *      @OA\Schema(
     *            type="string",
     *        ),
     *   ),
     *  @OA\Response(response = "200", description = "Success"),
     *  )
     */
    ## 6. DELETE Method
    /**
     * @OA\Delete(
     *    path="/api/user?user_id={id}",
     *    tags={"User"},
     *    description="Delete the user by the id",
     *    operationId="deleteUserById",
     *    summary="Delete user by the id",
     *    @OA\Parameter(
     *         name="id",
     *         description="User id",
     *         in="path",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *    ),
     *    security={
     *       {"JWTHeaderAuthentication": {}}
     *    },
     *    @OA\Response(
     *          response = "200", 
     *          description = "Success"
     *    )
     * )
     */
    ## Post example
    /**
     * @OA\Post(
     *     path="/api/user",
     *     tags={"User"},
     *     description="Create New User",
     *     summary="Add New User",
     *     operationId="createUser",
     *     @OA\Parameter(
     *         description="Name",
     *         name="name",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *     ),
     *     @OA\Parameter(
     *         description="User Type ID",
     *         name="type_id",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *             type="string",
     *         ),
     *     ),
     *      @OA\Parameter(
     *         description="Active",
     *         name="meta_active",
     *         in="query",
     *         required=true,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                 type="string",
     *                 enum={"0", "1"},
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="successful operation",
     *         @OA\Schema(ref="api/user")
     *     ),
     * security={
     *       {"JWTHeaderAuthentication": {}}
     *  },
     * )
     */
}
