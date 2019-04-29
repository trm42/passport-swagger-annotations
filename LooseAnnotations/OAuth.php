<?php

namespace App\LooseAnnotations;

// ====== Security

/**
 * @OA\SecurityScheme(
 *   securityDefinition="oauth_password",
 *   type="oauth2",
 *   tokenUrl=API_TOKEN_AUTHORIZATION_URL,
 *   flow="password",
 *   scopes={
 *     "admin": "admin"
 *   }
 * )
 */

/**
 * @OA\SecurityScheme(
 *   securityDefinition="oauth_implicit",
 *   type="oauth2",
 *   authorizationUrl=API_IMPLICIT_AUTHORIZATION_URL,
 *   flow="implicit",
 *   scopes={
 *     "admin": "admin"
 *   }
 * )
 */

/**
 * @OA\SecurityScheme(
 *   securityDefinition="oauth_client_credentials",
 *   type="oauth2",
 *   authorizationUrl=API_TOKEN_AUTHORIZATION_URL,
 *   flow="application",
 *   scopes={
 *     "admin": "admin"
 *   }
 * )
 */

/**
 * @OA\SecurityScheme(
 *   securityDefinition="oauth_client_authorization_code",
 *   type="oauth2",
 *   authorizationUrl=API_TOKEN_AUTHORIZATION_URL,
 *   flow="accessCode",
 *   scopes={
 *     "admin": "admin"
 *   }
 * )
 */

// ====== Urls

/**
 *  @OA\Get(
 *      path="/oauth/clients",
 *      summary="Returns all clients for authenticated user",
 *      tags={"OAuth"},
 *      operationId="getClients",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *              type="object",
 *              ref="#/components/schemas/Client"
 *          )
 *      )
 *  )
 */

/**
 *  @OA\Post(
 *      path="/oauth/clients",
 *      summary="Creates new client",
 *      tags={"OAuth"},
 *      operationId="createClient",
 *      requestBody={"$ref": "#/components/requestBodies/ClientRequest"},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *              type="object",
 *              ref="#/components/schemas/Client",
 *          )
 *      )
 *  )
 */

/**
 *  @OA\Put(
 *      path="/oauth/clients/{client_id}",
 *      summary="Update client",
 *      tags={"OAuth"},
 *      operationId="updateClient",
 *      @OA\Parameter(
 *          name="client_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      requestBody={"$ref": "#/components/requestBodies/ClientRequest"},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 *  )
 */

/**
 *  @OA\Delete(
 *      path="/oauth/clients/{client_id}",
 *      summary="Delete client",
 *      tags={"OAuth"},
 *      operationId="deleteClient",
 *      @OA\Parameter(
 *          name="client_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 *  )
 */

/**
 * RouteRegistrar::forAuthorization
 *
 * GET /oauth/authorize
 * POST /oauth/authorize
 * DELETE /oauth/authorize
 */

/**
 * @OA\Get(
 *      path="/oauth/authorize",
 *      summary="Request authorization code html page",
 *      tags={"OAuth"},
 *      operationId="getAuthorizationPage",
 *      @OA\Parameter(
 *          name="client_id",
 *          in="query",
 *          description="OAuth Client ID",
 *          required=true,
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="redirect_uri",
 *          in="query",
 *          description="Where to redirect after authorization",
 *          required=true,
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 *      @OA\Parameter(
 *          name="response_type",
 *          in="query",
 *          description="",
 *          required=true,
 *          @OA\Items(
 *             type="string",
 *             enum={"token", "code"}
 *         )
 *      ),
 *      @OA\Parameter(
 *          name="scope",
 *          in="query",
 *          description="What scopes are requested",
 *          required=true,
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 * )
 */

/**
 *  @OA\Post(
 *      path="/oauth/authorize",
 *      summary="OAuth authorization",
 *      tags={"OAuth"},
 *      operationId="authorize",
 *      requestBody={"$ref": "#/components/requestBodies/Client"},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *              type="object",
 *              ref="#/components/schemas/Client",
 *          )
 *      )
 *  )
 */

/**
 *  @OA\Delete(
 *      path="/oauth/authorize/{client_id}",
 *      summary="Deny the authorization request",
 *      tags={"OAuth"},
 *      operationId="denyAuthorization",
 *      @OA\Parameter(
 *          name="client_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 *  )
 */

/**
 * RouteRegistrar::forAccessTokens
 *
 * POST /oauth/token
 * GET /oauth/tokens
 * DELETE /oauth/{token_id}
 *
 */

/**
 * @OA\Post(
 *      path="/oauth/token",
 *      summary="Requests a refresh token",
 *      tags={"OAuth"},
 *      operationId="refreshToken",
 *      requestBody={"$ref": "#/components/requestBodies/TokenRequest"},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 * )
 */

/**
 *  @OA\Get(
 *      path="/oauth/tokens",
 *      summary="Returns all client's tokens for authenticated user",
 *      tags={"OAuth"},
 *      operationId="getTokens",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *              type="array",
 *              @OA\Items(ref="#/components/schemas/Token")
 *          )
 *      )
 *  )
 */

/**
 *  @OA\Delete(
 *      path="/oauth/token/{token_id}",
 *      summary="Deny the token",
 *      tags={"OAuth"},
 *      operationId="denyToken",
 *      @OA\Parameter(
 *          name="token_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 *  )
 */

/**
 * RouteRegistrar: forTransientTokens()
 *
 * POST /oauth/token/refresh
 */

/**
 *  @OA\Post(
 *      path="/oauth/token/refresh",
 *      summary="Get a fresh transient token cookie for the authenticated user",
 *      tags={"OAuth"},
 *      operationId="tokenRefresh",
 *      requestBody={"$ref": "#/components/requestBodies/ClientRequest"},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\Schema(
 *              type="object",
 *              ref="#/components/schemas/Client",
 *          )
 *      )
 *  )
 */

/**
 * RouteRegistrar::forPersonalAccessTokens
 *
 * GET /oauth/scopes
 * GET /oauth/personal-access-tokens
 * POST /oauth/personal-access-tokens
 * DELETE /oauth/personal-access-tokens
 */

// Models

/**
 * @OA\RequestBody(
 *      request="Client",
 *      description="Client",
 *      required=true,
 *      @OA\JsonContent(ref="#/components/schemas/Client")
 * )
 */

/**
 * @see vendor/laravel/passport/src/Client.php
 *
 * @OA\Schema(
 *   schema="Client",
 *   required={},
 *   type="object"
 * )
 */
class Client
{
    /**
     * @OA\Property(
     *     type="integer",
     *     property="id",
     *     description="Id.",
     *     example="300",
     *     readOnly=true
     * )
     * @OA\Property(
     *     type="integer",
     *     property="user_id",
     *     description="User Id",
     *     example="3000",
     * )
     * @OA\Property(
     *      *          @OA\Schema(
     *              type="string"
     *          ),
     *     property="name",
     *     description="Client name",
     *     example="DemoClient"
     * )
     * @OA\Property(
     *     @OA\Schema(
     *        type="string"
     *     ),
     *     property="redirect",
     *     description="Redirect",
     *     example="http://localhost"
     * )
     * @OA\Property(
     *     type="boolean",
     *     property="personal_access_client",
     *     description="Client name",
     *     example="true|false",
     * )
     * @OA\Property(
     *     type="boolean",
     *     property="password_client",
     *     description="client password",
     *     example="true|false",
     * )
     * @OA\Property(
     *     type="boolean",
     *     property="revoked",
     *     description="Is it revoked",
     *     example="true|false",
     * )
     */
}

/**
 * @OA\RequestBody(
 *      request="Token",
 *      description="Token",
 *      required=true,
 *      @OA\JsonContent(ref="#/components/schemas/Token")
 * )
 */

/**
 * @see vendor/laravel/passport/src/Token.php
 *
 * @OA\Schema(
 *   schema="Token",
 *   required={},
 *   type="object"
 * )
 */
class Token {

    /**
     * @OA\Property(
     *     type="integer",
     *     property="id",
     *     description="Id.",
     *     example="300",
     *     readOnly=true
     * )
     */

    /**
     * @OA\Property(
     *          @OA\Schema(
     *              type="string"
     *          ),
     *     property="name",
     *     description="",
     *     example="300",
     *     readOnly=true
     * )
     */

    /**
     * @OA\Property(
     *     type="array",
     *     property="scopes",
     *     description="Requested and allowed scopes",
     *     example="[...]",
     *     readOnly=true,
     *     @OA\Items(
     *          type="string"
     *     )
     * )
     */

    /**
     * @OA\Property(
     *     property="client",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/Client"),
     *     description="",
     *     example="[...]"
     * )
     */

    /**
     * @OA\Property(
     *     type="boolean",
     *     property="revoked",
     *     description="",
     *     example="bool|false",
     *     readOnly=true
     * )
     */

    /**
     * @OA\Property(
     *     type="string",
     *     property="created_at",
     *     description="Upload timestamp",
     *     example="2016-02-02 00:50:00",
     *     readOnly=true
     * )
     */

    /**
     * @OA\Property(
     *     type="string",
     *     property="updated_at",
     *     description="When data updated",
     *     example="2016-02-02 00:50:00",
     *     readOnly=true
     * )
     */

    /**
     * @OA\Property(
     *     type="string",
     *     property="expires_at",
     *     description="Token expiry date",
     *     example="2016-02-02 00:50:00",
     *     readOnly=true
     * )
     */

    /**
     * @OA\Property(
     *     property="user",
     *     type="array",
     *     @OA\Items(ref="#/components/schemas/User"),
     *     description="",
     *     example="[...]"
     * )
     */
}

/**
 * @OA\RequestBody(
 *      request="ClientRequest",
 *      description="Client, requires only name and redirect",
 *      required=true,
 *      @OA\JsonContent(ref="#/components/schemas/ClientRequest")
 * )
 */
class ClientRequest
{
    /**
     * @OA\Schema(
     *     schema="ClientRequest",
     *      @OA\Property(
     *          property="name",
     *          type="string",
     *      ),
     *      @OA\Property(
     *          property="redirect",
     *          type="string",
     *      )
     * )
     */
}

/**
 * @OA\RequestBody(
 *      request="TokenRequest",
 *      description="...",
 *      required=true,
 *      @OA\JsonContent(ref="#/components/schemas/TokenRequest")
 * )
 */
class TokenRequest
{

    /**
     * @OA\Schema(
     *     schema="TokenRequest",
     * @OA\Parameter(
     *          name="grant_type",
     *          in="formData",
     *          description="refresh_token or password",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Parameter(
     *          name="client_id",
     *          in="formData",
     *          description="OAuth Client ID",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Parameter(
     *          name="client_secret",
     *          in="formData",
     *          description="OAuth Client Secret",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Parameter(
     *          name="scope",
     *          in="query",
     *          description="What scopes are requested, for all, use '*'",
     *          required=true,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Parameter(
     *          name="refresh_token",
     *          in="formData",
     *          description="Refresh_token from the authorization response",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Parameter(
     *          name="username",
     *          in="formData",
     *          description="Username for login",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     * @OA\Parameter(
     *          name="password",
     *          in="formData",
     *          description="Password for the user",
     *          required=false,
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *  )
     */
}
