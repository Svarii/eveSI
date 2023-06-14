<?php
//TODO::You might want to rethink this.  Maybe you should be not be using constants?  Just load these into a config array?
/**
 * @author Svarii
 * @version 0.0.1a
 * @desc Application Settings
 * @namespace eveSI
 */
namespace eveSI\config;
/**
 * @var const CLIENT_ID
 * @desc The Client ID generated when registering an Eve Online Application 
 *      @link https://developers.eveonline.com/
 *      @since v0.0.1a
 */
const CLIENT_ID = '{YOUR_CLIENT_ID}';
/**
 * @var const SECRET_KEY
 * @desc The Secret Key generated when registering an Eve Online Application
 *      @link https://developers.eveonline.com/
 *     @since v0.0.1a
 */
const SECRET_KEY = '{SECRET_KEY}';
/**
 * @var const CALLBACK_URI
 * @desc The URI of the applications' authorization handler
 *     @link https://localhost/authorizationHandler.php
       @since v0.0.1a *     
 */
const CALLBACK_URI = '{CALLBACK_URI}';
/**
 * @var const BASE_URI
 * @desc The Base URI of the Eve Swagger Interface
 *     @link https://esi.evetech.net
 *     @since v0.0.1a
 */
const BASEURI = "https://esi.evetech.net";
/**
 * @var const IMAGESERVER
 * @desc The Base URI of the Eve Online CDN Image Server
 *     @link https://docs.esi.evetech.net/docs/image_server.html
 *     @since v0.0.1a
 */
const IMAGESERVER = "https://images.evetech.net";
/**
 * @example "new_eve_si.php" Example
 * @var const VERSION
 * @desc The version of the api to use.
 * @desc Versioning
 *    @since v0.0.1a * 
ESI itself has an API version (as defined in the spec). That version number is mostly irrelevant to API consumers (it’s the version of ESI-lib). Instead, ESI versions each route individually. This allows us to make much faster changes and avoid the awkward situation of global API versioning.

As an example, let’s say you have a route /v1/hello/<string>/, and you want to change the path parameter to accepting an integer instead. With a traditional API, the entire APIs basePath would have to be bumped. This is obviously a little less than ideal, considering there could be hundreds of other unchanged routes.

With ESI, you always (and only) get three complete APIs, /dev/, /latest/ and /legacy/. But each route is also given a numbered path, starting with /v1/. Alternate routes are mentioned in the route description (until something better comes along in the standards?).

/dev/ can change at any point, changes to /latest/ will be announced. After changes are made the previous /latest/ will be available as /legacy/, until the next version bump. If you want to avoid the return schema of your request suddenly changing, you can use the versioned alternate route. In that case, prudent developers may want to create unit tests (watch for the warning: 199 headers) to notify them when endpoints are moved to legacy.

Additionally, endpoints may be deprecated. When an endpoint is deprecated, a line appears through it on the Swagger UI, and it begins returning the “warning: 299” header. This is slightly different than a warning: 199 header, which you will receive if an endpoint was updated and there is now a newer version of it available. Deprecation is how Tech Co broadcasts an intent to delete a route. Deprecated endpoints may include a recommended alternate source or other message in the 299 warning, and you should move away from them immediately.

Because endpoints are versioned individually, the concept of an overall /v1/ (or 2 or 5) API is not very relevant, and no swagger-ui is provided for these routes. Browsing the API’s capabilities should be done via /dev/, /latest/ or /legacy/. However, users who wish to indulge their curiosity may feed a /v1/swagger.json into their own Swagger UI to get an overview, if they wish.

As an aside, all ESI routes end with a /. The only exceptions are the /<version>/swagger.json routes and routes used by the swagger-ui, which are passed through ESI.
 * @param   latest
 * @param   legacy
 * @param   dev
 *     @link https://docs.esi.evetech.net/docs/esi_introduction.html
 *     @since v0.0.1a
 */
const VERSION = "latest";
/**
 * @var const DATASOURCE
 * @desc The server to pull data from
 * @staticvar tranquility -> Live Server
 * @staticvar singularity -> Test Server
 * @see https://community.eveonline.com/support/test-servers/test-servers-overview/
 *     @since v0.0.1a
 */
const DATASOURCE = "tranquility";
/**
 * @var const LANAGUAGE
 * @desc The language to use
 * @staticvar = "en-US"
 *    @since v0.0.1a
 */
const LANGUAGE = "en-US";
/**
 * @var const ENABLE_SSL
 * @desc Used to disable SSL in cURL during devlopment
 * @param bool true - Production
 * @param bool false - Developement Only
 *     @since v0.0.1a
 */
const ENABLE_SSL = false;
/**
 * @var const ENABLE_DEBUG
 * @desc Used to enable debugging output for the developer
 * @param bool true - Development Only
 * @param bool false - Production
 *     @since v0.0.1a
 */
const ENABLE_DEBUG = false;
//Not implimented
/**
 * @var const SWAGGER_JSON
 * @desc The URI to the location of the Eve Online ESI swagger.json file
 * @param string URI
 *     @since v0.0.1a
 */
const SWAGGER_JSON = "https://esi.evetech.net/latest/swagger.json";
?>
