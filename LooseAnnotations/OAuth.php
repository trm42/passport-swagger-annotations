<?php

namespace App\LooseAnnotations;

// ====== Security

/**
 * @SWG\SecurityScheme(
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
 * @SWG\SecurityScheme(
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
 * @SWG\SecurityScheme(
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
 * @SWG\SecurityScheme(
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
 *  @SWG\Get(
 *      path="/oauth/clients",
 *      summary="Returns all clients for authenticated user",
 *      tags={"OAuth"},
 *      operationId="getClients",
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="object",
 *              ref="#/definitions/Client"
 *          )
 *      )
 *  )
 */

/**
 *  @SWG\Post(
 *      path="/oauth/clients",
 *      summary="Creates new client",
 *      tags={"OAuth"},
 *      operationId="createClient",
 *      @SWG\Parameter(
 *         name="body",
 *         in="body",
 *         description="Client, requires only name and redirect",
 *         required=true,
 *         @SWG\Schema(ref="#/definitions/Client"),
 *     ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="object",
 *              ref="#/definitions/Client",
 *          )
 *      )
 *  )
 */

/**
 *  @SWG\Put(
 *      path="/oauth/clients/{client_id}",
 *      summary="Update client",
 *      tags={"OAuth"},
 *      operationId="updateClient",
 *      @SWG\Parameter(
 *          name="client_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          type="integer"
 *      ),
 *      @SWG\Parameter(
 *         name="body",
 *         in="body",
 *         description="Only name and redirect can be updated",
 *         required=true,
 *         @SWG\Schema(ref="#/definitions/Client"),
 *     ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 *  )
 */

/**
 *  @SWG\Delete(
 *      path="/oauth/clients/{client_id}",
 *      summary="Delete client",
 *      tags={"OAuth"},
 *      operationId="deleteClient",
 *      @SWG\Parameter(
 *          name="client_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          type="integer"
 *      ),
 *      @SWG\Response(
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
 * @SWG\Get(
 *      path="/oauth/authorize",
 *      summary="Request authorization code html page",
 *      tags={"OAuth"},
 *      operationId="getAuthorizationPage",
 *      @SWG\Parameter(
 *          name="client_id",
 *          in="query",
 *          description="OAuth Client ID",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="redirect_uri",
 *          in="query",
 *          description="Where to redirect after authorization",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="response_type",
 *          in="query",
 *          description="",
 *          required=true,
 *          type="string",
 *          @SWG\Items(
 *             type="string",
 *             enum={"token", "code"}
 *         )
 *      ),
 *      @SWG\Parameter(
 *          name="scope",
 *          in="query",
 *          description="What scopes are requested",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 * )
 */

/**
 *  @SWG\Post(
 *      path="/oauth/authorize",
 *      summary="OAuth authorization",
 *      tags={"OAuth"},
 *      operationId="authorize",
 *      @SWG\Parameter(
 *         name="formData",
 *         in="formData",
 *         type="array",
 *         description="Should be client object as form data array",
 *         required=true,
 *         @SWG\Items(ref="#/definitions/Client"),
 *         @SWG\Schema(
 *              type="object",
 *              @SWG\Items(ref="#/definitions/Client")
 *         )
 *     ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="object",
 *              ref="#/definitions/Client",
 *          )
 *      )
 *  )
 */

/**
 *  @SWG\Delete(
 *      path="/oauth/authorize/{client_id}",
 *      summary="Deny the authorization request",
 *      tags={"OAuth"},
 *      operationId="denyAuthorization",
 *      @SWG\Parameter(
 *          name="client_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          type="integer"
 *      ),
 *      @SWG\Response(
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
 * @SWG\Post(
 *      path="/oauth/token",
 *      summary="Requests a refresh token",
 *      tags={"OAuth"},
 *      operationId="refreshToken",
 *      @SWG\Parameter(
 *          name="grant_type",
 *          in="formData",
 *          description="refresh_token or password",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="client_id",
 *          in="formData",
 *          description="OAuth Client ID",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="client_secret",
 *          in="formData",
 *          description="OAuth Client Secret",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="scope",
 *          in="query",
 *          description="What scopes are requested, for all, use '*'",
 *          required=true,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="refresh_token",
 *          in="formData",
 *          description="Refresh_token from the authorization response",
 *          required=false,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="username",
 *          in="formData",
 *          description="Username for login",
 *          required=false,
 *          type="string"
 *      ),
 *      @SWG\Parameter(
 *          name="password",
 *          in="formData",
 *          description="Password for the user",
 *          required=false,
 *          type="string"
 *      ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *      )
 * )
 */

/**
 *  @SWG\Get(
 *      path="/oauth/tokens",
 *      summary="Returns all client's tokens for authenticated user",
 *      tags={"OAuth"},
 *      operationId="getTokens",
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="array",
 *              @SWG\Items(ref="#/definitions/Token")
 *          )
 *      )
 *  )
 */

/**
 *  @SWG\Delete(
 *      path="/oauth/token/{token_id}",
 *      summary="Deny the token",
 *      tags={"OAuth"},
 *      operationId="denyToken",
 *      @SWG\Parameter(
 *          name="token_id",
 *          in="path",
 *          description="",
 *          required=true,
 *          type="integer"
 *      ),
 *      @SWG\Response(
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
 *  @SWG\Post(
 *      path="/oauth/token/refresh",
 *      summary="Get a fresh transient token cookie for the authenticated user",
 *      tags={"OAuth"},
 *      operationId="tokenRefresh",
 *      @SWG\Parameter(
 *         name="body",
 *         in="body",
 *         description="Client, requires only name and redirect",
 *         required=true,
 *         @SWG\Schema(ref="#/definitions/Client"),
 *     ),
 *      @SWG\Response(
 *          response=200,
 *          description="successful operation",
 *          @SWG\Schema(
 *              type="object",
 *              ref="#/definitions/Client",
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
 * @see vendor/laravel/passport/src/Client.php
 *
 * @SWG\Definition(
 *   definition="Client",
 *   required={},
 *   type="object"
 * )
 */
class Client
{
    /**
     * @SWG\Property(
     *     type="integer",
     *     property="id",
     *     description="Id.",
     *     example="300",
     *     readOnly=true
     * )
     * @SWG\Property(
     *     type="integer",
     *     property="user_id",
     *     description="User Id",
     *     example="3000",
     * )
     * @SWG\Property(
     *     type="string",
     *     property="name",
     *     description="Client name",
     *     example="DemoClient"
     * )
     * @SWG\Property(
     *     type="string",
     *     property="redirect",
     *     description="Redirect",
     *     example="http://localhost"
     * )
     * @SWG\Property(
     *     type="boolean",
     *     property="personal_access_client",
     *     description="Client name",
     *     example="true|false",
     * )
     * @SWG\Property(
     *     type="boolean",
     *     property="password_client",
     *     description="client password",
     *     example="true|false",
     * )
     * @SWG\Property(
     *     type="boolean",
     *     property="revoked",
     *     description="Is it revoked",
     *     example="true|false",
     * )
     */
}

/**
 * @see vendor/laravel/passport/src/Token.php
 *
 * @SWG\Definition(
 *   definition="Token",
 *   required={},
 *   type="object"
 * )
 */
class Token {

    /**
     * @SWG\Property(
     *     type="integer",
     *     property="id",
     *     description="Id.",
     *     example="300",
     *     readOnly=true
     * )
     */

    /**
     * @SWG\Property(
     *     type="string",
     *     property="name",
     *     description="",
     *     example="300",
     *     readOnly=true
     * )
     */

    /**
     * @SWG\Property(
     *     type="array",
     *     property="scopes",
     *     description="Requested and allowed scopes",
     *     example="[...]",
     *     readOnly=true,
     *     @SWG\Items(
     *          type="string"
     *     )
     * )
     */

    /**
     * @SWG\Property(
     *     property="client",
     *     type="array",
     *     @SWG\Items(ref="#/definitions/Client"),
     *     description="",
     *     example="[...]"
     * )
     */

    /**
     * @SWG\Property(
     *     type="boolean",
     *     property="revoked",
     *     description="",
     *     example="bool|false",
     *     readOnly=true
     * )
     */

    /**
     * @SWG\Property(
     *     type="string",
     *     property="created_at",
     *     description="Upload timestamp",
     *     example="2016-02-02 00:50:00",
     *     readOnly=true
     * )
     */

     /**
     * @SWG\Property(
     *     type="string",
     *     property="updated_at",
     *     description="When data updated",
     *     example="2016-02-02 00:50:00",
     *     readOnly=true
     * )
     */

    /**
     * @SWG\Property(
     *     type="string",
     *     property="expires_at",
     *     description="Token expiry date",
     *     example="2016-02-02 00:50:00",
     *     readOnly=true
     * )
     */

    /**
     * @SWG\Property(
     *     property="user",
     *     type="array",
     *     @SWG\Items(ref="#/definitions/User"),
     *     description="",
     *     example="[...]"
     * )
     */
}
