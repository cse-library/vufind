<?php
return array (
  'service_manager' => 
  array (
    'aliases' => 
    array (
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
      'VuFind\\AccountCapabilities' => 'VuFind\\Config\\AccountCapabilities',
      'VuFind\\AuthManager' => 'VuFind\\Auth\\Manager',
      'VuFind\\AuthPluginManager' => 'VuFind\\Auth\\PluginManager',
      'VuFind\\AutocompletePluginManager' => 'VuFind\\Autocomplete\\PluginManager',
      'VuFind\\CacheManager' => 'VuFind\\Cache\\Manager',
      'VuFind\\ChannelProviderPluginManager' => 'VuFind\\ChannelProvider\\PluginManager',
      'VuFind\\Config' => 'VuFind\\Config\\PluginManager',
      'VuFind\\ContentPluginManager' => 'VuFind\\Content\\PluginManager',
      'VuFind\\ContentAuthorNotesPluginManager' => 'VuFind\\Content\\AuthorNotes\\PluginManager',
      'VuFind\\ContentCoversPluginManager' => 'VuFind\\Content\\Covers\\PluginManager',
      'VuFind\\ContentExcerptsPluginManager' => 'VuFind\\Content\\Excerpts\\PluginManager',
      'VuFind\\ContentReviewsPluginManager' => 'VuFind\\Content\\Reviews\\PluginManager',
      'VuFind\\ContentSummariesPluginManager' => 'VuFind\\Content\\Summaries\\PluginManager',
      'VuFind\\ContentTOCPluginManager' => 'VuFind\\Content\\TOC\\PluginManager',
      'VuFind\\CookieManager' => 'VuFind\\Cookie\\CookieManager',
      'VuFind\\DateConverter' => 'VuFind\\Date\\Converter',
      'VuFind\\DbAdapter' => 'Zend\\Db\\Adapter\\Adapter',
      'VuFind\\DbAdapterFactory' => 'VuFind\\Db\\AdapterFactory',
      'VuFind\\DbRowPluginManager' => 'VuFind\\Db\\Row\\PluginManager',
      'VuFind\\DbTablePluginManager' => 'VuFind\\Db\\Table\\PluginManager',
      'VuFind\\HierarchicalFacetHelper' => 'VuFind\\Search\\Solr\\HierarchicalFacetHelper',
      'VuFind\\HierarchyDriverPluginManager' => 'VuFind\\Hierarchy\\Driver\\PluginManager',
      'VuFind\\HierarchyTreeDataFormatterPluginManager' => 'VuFind\\Hierarchy\\TreeDataFormatter\\PluginManager',
      'VuFind\\HierarchyTreeDataSourcePluginManager' => 'VuFind\\Hierarchy\\TreeDataSource\\PluginManager',
      'VuFind\\HierarchyTreeRendererPluginManager' => 'VuFind\\Hierarchy\\TreeRenderer\\PluginManager',
      'VuFind\\HMAC' => 'VuFind\\Crypt\\HMAC',
      'VuFind\\Http' => 'VuFindHttp\\HttpService',
      'VuFind\\ILSAuthenticator' => 'VuFind\\Auth\\ILSAuthenticator',
      'VuFind\\ILSConnection' => 'VuFind\\ILS\\Connection',
      'VuFind\\ILSDriverPluginManager' => 'VuFind\\ILS\\Driver\\PluginManager',
      'VuFind\\ILSHoldLogic' => 'VuFind\\ILS\\Logic\\Holds',
      'VuFind\\ILSHoldSettings' => 'VuFind\\ILS\\HoldSettings',
      'VuFind\\ILSTitleHoldLogic' => 'VuFind\\ILS\\Logic\\TitleHolds',
      'VuFind\\IpAddressUtils' => 'VuFind\\Net\\IpAddressUtils',
      'VuFind\\Logger' => 'VuFind\\Log\\Logger',
      'VuFind\\Mailer' => 'VuFind\\Mailer\\Mailer',
      'VuFind\\ProxyConfig' => 'ProxyManager\\Configuration',
      'VuFind\\Recaptcha' => 'VuFind\\Service\\ReCaptcha',
      'VuFind\\RecommendPluginManager' => 'VuFind\\Recommend\\PluginManager',
      'VuFind\\RecordCache' => 'VuFind\\Record\\Cache',
      'VuFind\\RecordDriverPluginManager' => 'VuFind\\RecordDriver\\PluginManager',
      'VuFind\\RecordLoader' => 'VuFind\\Record\\Loader',
      'VuFind\\RecordRouter' => 'VuFind\\Record\\Router',
      'VuFind\\RecordTabPluginManager' => 'VuFind\\RecordTab\\PluginManager',
      'VuFind\\RelatedPluginManager' => 'VuFind\\Related\\PluginManager',
      'VuFind\\ResolverDriverPluginManager' => 'VuFind\\Resolver\\Driver\\PluginManager',
      'VuFind\\Search' => 'VuFindSearch\\Service',
      'VuFind\\SearchOptionsPluginManager' => 'VuFind\\Search\\Options\\PluginManager',
      'VuFind\\SearchParamsPluginManager' => 'VuFind\\Search\\Params\\PluginManager',
      'VuFind\\SearchResultsPluginManager' => 'VuFind\\Search\\Results\\PluginManager',
      'VuFind\\SearchRunner' => 'VuFind\\Search\\SearchRunner',
      'VuFind\\SearchSpecsReader' => 'VuFind\\Config\\SearchSpecsReader',
      'VuFind\\SearchTabsHelper' => 'VuFind\\Search\\SearchTabsHelper',
      'VuFind\\SessionManager' => 'Zend\\Session\\SessionManager',
      'VuFind\\SessionPluginManager' => 'VuFind\\Session\\PluginManager',
      'VuFind\\SMS' => 'VuFind\\SMS\\SMSInterface',
      'VuFind\\Translator' => 'Zend\\Mvc\\I18n\\Translator',
      'VuFind\\WorldCatUtils' => 'VuFind\\Connection\\WorldCatUtils',
      'VuFind\\YamlReader' => 'VuFind\\Config\\YamlReader',
      'Zend\\Validator\\Csrf' => 'VuFind\\Validator\\Csrf',
    ),
    'factories' => 
    array (
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'ZfcRbac\\Guards' => 'ZfcRbac\\Factory\\GuardsFactory',
      'Rbac\\Rbac' => 'ZfcRbac\\Factory\\RbacFactory',
      'ZfcRbac\\Assertion\\AssertionPluginManager' => 'ZfcRbac\\Factory\\AssertionPluginManagerFactory',
      'ZfcRbac\\Collector\\RbacCollector' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'ZfcRbac\\Guard\\GuardPluginManager' => 'ZfcRbac\\Factory\\GuardPluginManagerFactory',
      'ZfcRbac\\Identity\\AuthenticationIdentityProvider' => 'ZfcRbac\\Factory\\AuthenticationIdentityProviderFactory',
      'ZfcRbac\\Options\\ModuleOptions' => 'ZfcRbac\\Factory\\ModuleOptionsFactory',
      'ZfcRbac\\Role\\RoleProviderPluginManager' => 'ZfcRbac\\Factory\\RoleProviderPluginManagerFactory',
      'ZfcRbac\\Service\\AuthorizationService' => 'ZfcRbac\\Factory\\AuthorizationServiceFactory',
      'ZfcRbac\\Service\\RoleService' => 'ZfcRbac\\Factory\\RoleServiceFactory',
      'ZfcRbac\\View\\Strategy\\RedirectStrategy' => 'ZfcRbac\\Factory\\RedirectStrategyFactory',
      'ZfcRbac\\View\\Strategy\\UnauthorizedStrategy' => 'ZfcRbac\\Factory\\UnauthorizedStrategyFactory',
      'ProxyManager\\Configuration' => 'VuFind\\Service\\Factory::getProxyConfig',
      'VuFind\\AjaxHandler\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Auth\\ILSAuthenticator' => 'VuFind\\Auth\\ILSAuthenticatorFactory',
      'VuFind\\Auth\\Manager' => 'VuFind\\Auth\\ManagerFactory',
      'VuFind\\Auth\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Autocomplete\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Autocomplete\\Suggester' => 'VuFind\\Autocomplete\\SuggesterFactory',
      'VuFind\\Cache\\Manager' => 'VuFind\\Cache\\ManagerFactory',
      'VuFind\\Cart' => 'VuFind\\CartFactory',
      'VuFind\\ChannelProvider\\ChannelLoader' => 'VuFind\\ChannelProvider\\ChannelLoaderFactory',
      'VuFind\\ChannelProvider\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Config\\AccountCapabilities' => 'VuFind\\Config\\AccountCapabilitiesFactory',
      'VuFind\\Config\\PluginManager' => 'VuFind\\Config\\PluginManagerFactory',
      'VuFind\\Config\\SearchSpecsReader' => 'VuFind\\Config\\YamlReaderFactory',
      'VuFind\\Config\\YamlReader' => 'VuFind\\Config\\YamlReaderFactory',
      'VuFind\\Connection\\Relais' => 'VuFind\\Connection\\RelaisFactory',
      'VuFind\\Connection\\WorldCatUtils' => 'VuFind\\Connection\\WorldCatUtilsFactory',
      'VuFind\\Content\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\AuthorNotes\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Covers\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Excerpts\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Reviews\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\Summaries\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Content\\TOC\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\ContentBlock\\BlockLoader' => 'VuFind\\ContentBlock\\BlockLoaderFactory',
      'VuFind\\ContentBlock\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Cookie\\CookieManager' => 'VuFind\\Cookie\\CookieManagerFactory',
      'VuFind\\Cover\\CachingProxy' => 'VuFind\\Cover\\CachingProxyFactory',
      'VuFind\\Cover\\Generator' => 'VuFind\\Cover\\GeneratorFactory',
      'VuFind\\Cover\\Layer\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Cover\\Loader' => 'VuFind\\Cover\\LoaderFactory',
      'VuFind\\Cover\\Router' => 'VuFind\\Cover\\RouterFactory',
      'VuFind\\Crypt\\HMAC' => 'VuFind\\Crypt\\HMACFactory',
      'VuFind\\Date\\Converter' => 'VuFind\\Service\\DateConverterFactory',
      'VuFind\\Db\\AdapterFactory' => 'VuFind\\Service\\ServiceWithConfigIniFactory',
      'VuFind\\Db\\Row\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Db\\Table\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Export' => 'VuFind\\ExportFactory',
      'VuFind\\Favorites\\FavoritesService' => 'VuFind\\Favorites\\FavoritesServiceFactory',
      'VuFind\\GeoFeatures\\BasemapConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
      'VuFind\\GeoFeatures\\MapTabConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
      'VuFind\\GeoFeatures\\MapSelectionConfig' => 'VuFind\\GeoFeatures\\AbstractConfigFactory',
      'VuFind\\Hierarchy\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Hierarchy\\TreeDataFormatter\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Hierarchy\\TreeDataSource\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Hierarchy\\TreeRenderer\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\ILS\\Connection' => 'VuFind\\ILS\\ConnectionFactory',
      'VuFind\\ILS\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\ILS\\Logic\\Holds' => 'VuFind\\ILS\\Logic\\LogicFactory',
      'VuFind\\ILS\\Logic\\TitleHolds' => 'VuFind\\ILS\\Logic\\LogicFactory',
      'VuFind\\ILS\\HoldSettings' => 'VuFind\\ILS\\HoldSettingsFactory',
      'VuFind\\Log\\Logger' => 'VuFind\\Log\\LoggerFactory',
      'VuFind\\Mailer\\Mailer' => 'VuFind\\Mailer\\Factory',
      'VuFind\\Net\\IpAddressUtils' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\QRCode\\Loader' => 'VuFind\\QRCode\\LoaderFactory',
      'VuFind\\Recommend\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Record\\Cache' => 'VuFind\\Record\\CacheFactory',
      'VuFind\\Record\\Loader' => 'VuFind\\Record\\LoaderFactory',
      'VuFind\\Record\\Router' => 'VuFind\\Record\\RouterFactory',
      'VuFind\\RecordDriver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\RecordTab\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Related\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Resolver\\Driver\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Role\\PermissionManager' => 'VuFind\\Role\\PermissionManagerFactory',
      'VuFind\\Role\\PermissionDeniedManager' => 'VuFind\\Role\\PermissionDeniedManagerFactory',
      'VuFind\\Search\\BackendManager' => 'VuFind\\Search\\BackendManagerFactory',
      'VuFind\\Search\\History' => 'VuFind\\Search\\HistoryFactory',
      'VuFind\\Search\\Memory' => 'VuFind\\Search\\MemoryFactory',
      'VuFind\\Search\\FacetCache\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Options\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Params\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Results\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Search\\Solr\\HierarchicalFacetHelper' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Search\\SearchRunner' => 'VuFind\\Search\\SearchRunnerFactory',
      'VuFind\\Search\\SearchTabsHelper' => 'VuFind\\Search\\SearchTabsHelperFactory',
      'VuFind\\Service\\ReCaptcha' => 'VuFind\\Service\\ReCaptchaFactory',
      'VuFind\\Session\\PluginManager' => 'VuFind\\ServiceManager\\AbstractPluginManagerFactory',
      'VuFind\\Session\\Settings' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\SMS\\SMSInterface' => 'VuFind\\SMS\\Factory',
      'VuFind\\Solr\\Writer' => 'VuFind\\Solr\\WriterFactory',
      'VuFind\\Tags' => 'VuFind\\TagsFactory',
      'VuFind\\Validator\\Csrf' => 'VuFind\\Validator\\CsrfFactory',
      'VuFindHttp\\HttpService' => 'VuFind\\Service\\Factory::getHttp',
      'VuFindSearch\\Service' => 'VuFind\\Service\\Factory::getSearchService',
      'Zend\\Db\\Adapter\\Adapter' => 'VuFind\\Service\\Factory::getDbAdapter',
      'Zend\\Mvc\\I18n\\Translator' => 'VuFind\\Service\\Factory::getTranslator',
      'Zend\\Session\\SessionManager' => 'VuFind\\Session\\ManagerFactory',
    ),
    'allow_override' => true,
    'initializers' => 
    array (
      0 => 'VuFind\\ServiceManager\\ServiceInitializer',
    ),
  ),
  'route_manager' => 
  array (
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'default' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/[:controller[/[:action]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'index',
            'action' => 'Home',
          ),
        ),
      ),
      'alma-webhook' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Alma/Webhook/[:almaWebhookAction]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Alma',
            'action' => 'Webhook',
          ),
        ),
      ),
      'content-page' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Content/[:page]',
          'constraints' => 
          array (
            'page' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Content',
            'action' => 'Content',
          ),
        ),
      ),
      'legacy-alphabrowse-results' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/AlphaBrowse/Results',
          'defaults' => 
          array (
            'controller' => 'Alphabrowse',
            'action' => 'Home',
          ),
        ),
      ),
      'legacy-bookcover' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/bookcover.php',
          'defaults' => 
          array (
            'controller' => 'Cover',
            'action' => 'Show',
          ),
        ),
      ),
      'legacy-summonrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Record',
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'legacy-worldcatrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/WorldCat/Record',
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'soap-shibboleth-logout-notification-handler' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/soap/shiblogout',
          'defaults' => 
          array (
            'controller' => 'ShibbolethLogoutNotification',
            'action' => 'index',
          ),
        ),
        'child_routes' => 
        array (
          'get' => 
          array (
            'type' => 'method',
            'options' => 
            array (
              'verb' => 'get',
              'defaults' => 
              array (
                'action' => 'get',
              ),
            ),
          ),
          'post' => 
          array (
            'type' => 'method',
            'options' => 
            array (
              'verb' => 'post',
              'defaults' => 
              array (
                'action' => 'post',
              ),
            ),
          ),
        ),
      ),
      'record' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Home',
          ),
        ),
      ),
      'record-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AddComment',
          ),
        ),
      ),
      'record-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'record-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AddTag',
          ),
        ),
      ),
      'record-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'record-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Save',
          ),
        ),
      ),
      'record-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Email',
          ),
        ),
      ),
      'record-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'SMS',
          ),
        ),
      ),
      'record-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Cite',
          ),
        ),
      ),
      'record-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Export',
          ),
        ),
      ),
      'record-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'RDF',
          ),
        ),
      ),
      'record-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Hold',
          ),
        ),
      ),
      'record-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Home',
          ),
        ),
      ),
      'record-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'record-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'record-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'record-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'PDF',
          ),
        ),
      ),
      'collection' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Home',
          ),
        ),
      ),
      'collection-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'AddComment',
          ),
        ),
      ),
      'collection-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'collection-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'AddTag',
          ),
        ),
      ),
      'collection-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'collection-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Save',
          ),
        ),
      ),
      'collection-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Email',
          ),
        ),
      ),
      'collection-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'SMS',
          ),
        ),
      ),
      'collection-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Cite',
          ),
        ),
      ),
      'collection-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Export',
          ),
        ),
      ),
      'collection-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'RDF',
          ),
        ),
      ),
      'collection-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Hold',
          ),
        ),
      ),
      'collection-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'Home',
          ),
        ),
      ),
      'collection-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'collection-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'collection-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'collection-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Collection/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Collection',
            'action' => 'PDF',
          ),
        ),
      ),
      'edsrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'edsrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'edsrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'edsrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'edsrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'edsrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'edsrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'edsrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'edsrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'edsrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'edsrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'edsrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'edsrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'edsrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'edsrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'edsrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'edsrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EdsRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EdsRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'eitrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'eitrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'eitrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'eitrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'eitrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'eitrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'eitrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'eitrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'eitrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'eitrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'eitrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'eitrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'eitrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'eitrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'eitrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'eitrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'eitrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/EITRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'EITRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'missingrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'missingrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'missingrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'missingrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'missingrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'missingrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'missingrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'missingrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'missingrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'missingrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'missingrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'missingrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'missingrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'missingrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'missingrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'missingrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'missingrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MissingRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MissingRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'primorecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'primorecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'primorecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'primorecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'primorecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'primorecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'primorecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'primorecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'primorecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'primorecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'primorecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'primorecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'primorecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'primorecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'primorecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'primorecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'primorecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/PrimoRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'PrimoRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'solrauthrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Home',
          ),
        ),
      ),
      'solrauthrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'AddComment',
          ),
        ),
      ),
      'solrauthrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'solrauthrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'AddTag',
          ),
        ),
      ),
      'solrauthrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'solrauthrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Save',
          ),
        ),
      ),
      'solrauthrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Email',
          ),
        ),
      ),
      'solrauthrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'SMS',
          ),
        ),
      ),
      'solrauthrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Cite',
          ),
        ),
      ),
      'solrauthrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Export',
          ),
        ),
      ),
      'solrauthrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'RDF',
          ),
        ),
      ),
      'solrauthrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Hold',
          ),
        ),
      ),
      'solrauthrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Home',
          ),
        ),
      ),
      'solrauthrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'solrauthrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'solrauthrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'solrauthrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Authority/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'PDF',
          ),
        ),
      ),
      'summonrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'summonrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'summonrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'summonrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'summonrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'summonrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'summonrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'summonrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'summonrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'summonrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'summonrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'summonrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'summonrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'summonrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'summonrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'summonrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'summonrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/SummonRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'SummonRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'worldcatrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'worldcatrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'AddComment',
          ),
        ),
      ),
      'worldcatrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'worldcatrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'AddTag',
          ),
        ),
      ),
      'worldcatrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'worldcatrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Save',
          ),
        ),
      ),
      'worldcatrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Email',
          ),
        ),
      ),
      'worldcatrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'SMS',
          ),
        ),
      ),
      'worldcatrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Cite',
          ),
        ),
      ),
      'worldcatrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Export',
          ),
        ),
      ),
      'worldcatrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'RDF',
          ),
        ),
      ),
      'worldcatrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Hold',
          ),
        ),
      ),
      'worldcatrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'Home',
          ),
        ),
      ),
      'worldcatrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'worldcatrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'worldcatrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'worldcatrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/WorldcatRecord/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'WorldcatRecord',
            'action' => 'PDF',
          ),
        ),
      ),
      'search2record' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Home',
          ),
        ),
      ),
      'search2record-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AddComment',
          ),
        ),
      ),
      'search2record-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'search2record-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AddTag',
          ),
        ),
      ),
      'search2record-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'search2record-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Save',
          ),
        ),
      ),
      'search2record-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Email',
          ),
        ),
      ),
      'search2record-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'SMS',
          ),
        ),
      ),
      'search2record-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Cite',
          ),
        ),
      ),
      'search2record-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Export',
          ),
        ),
      ),
      'search2record-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'RDF',
          ),
        ),
      ),
      'search2record-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Hold',
          ),
        ),
      ),
      'search2record-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'Home',
          ),
        ),
      ),
      'search2record-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'search2record-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'search2record-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'search2record-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Search2Record/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Search2Record',
            'action' => 'PDF',
          ),
        ),
      ),
      'vufindrecord' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id[/[:tab]]]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Home',
          ),
        ),
      ),
      'vufindrecord-addcomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AddComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AddComment',
          ),
        ),
      ),
      'vufindrecord-deletecomment' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/DeleteComment',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'DeleteComment',
          ),
        ),
      ),
      'vufindrecord-addtag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AddTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AddTag',
          ),
        ),
      ),
      'vufindrecord-deletetag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/DeleteTag',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'DeleteTag',
          ),
        ),
      ),
      'vufindrecord-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Save',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Save',
          ),
        ),
      ),
      'vufindrecord-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Email',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Email',
          ),
        ),
      ),
      'vufindrecord-sms' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/SMS',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'SMS',
          ),
        ),
      ),
      'vufindrecord-cite' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Cite',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Cite',
          ),
        ),
      ),
      'vufindrecord-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Export',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Export',
          ),
        ),
      ),
      'vufindrecord-rdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/RDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'RDF',
          ),
        ),
      ),
      'vufindrecord-hold' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Hold',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Hold',
          ),
        ),
      ),
      'vufindrecord-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/Home',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'Home',
          ),
        ),
      ),
      'vufindrecord-storageretrievalrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/StorageRetrievalRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'StorageRetrievalRequest',
          ),
        ),
      ),
      'vufindrecord-ajaxtab' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/AjaxTab',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'AjaxTab',
          ),
        ),
      ),
      'vufindrecord-illrequest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/ILLRequest',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'ILLRequest',
          ),
        ),
      ),
      'vufindrecord-pdf' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/Record/[:id]/PDF',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'Record',
            'action' => 'PDF',
          ),
        ),
      ),
      'userList' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MyResearch/MyList/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'MyList',
          ),
        ),
      ),
      'editList' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/MyResearch/EditList/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'EditList',
          ),
        ),
      ),
      'editLibraryCard' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/LibraryCards/editCard/[:id]',
          'constraints' => 
          array (
            'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'editCard',
          ),
        ),
      ),
      'alphabrowse-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Alphabrowse/Home',
          'defaults' => 
          array (
            'controller' => 'Alphabrowse',
            'action' => 'Home',
          ),
        ),
      ),
      'author-facetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Author/FacetList',
          'defaults' => 
          array (
            'controller' => 'Author',
            'action' => 'FacetList',
          ),
        ),
      ),
      'author-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Author/Home',
          'defaults' => 
          array (
            'controller' => 'Author',
            'action' => 'Home',
          ),
        ),
      ),
      'author-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Author/Search',
          'defaults' => 
          array (
            'controller' => 'Author',
            'action' => 'Search',
          ),
        ),
      ),
      'authority-facetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/FacetList',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'FacetList',
          ),
        ),
      ),
      'authority-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/Home',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Home',
          ),
        ),
      ),
      'authority-record' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/Record',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Record',
          ),
        ),
      ),
      'authority-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Authority/Search',
          'defaults' => 
          array (
            'controller' => 'Authority',
            'action' => 'Search',
          ),
        ),
      ),
      'browse-author' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Author',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Author',
          ),
        ),
      ),
      'browse-dewey' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Dewey',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Dewey',
          ),
        ),
      ),
      'browse-era' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Era',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Era',
          ),
        ),
      ),
      'browse-genre' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Genre',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Genre',
          ),
        ),
      ),
      'browse-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Home',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Home',
          ),
        ),
      ),
      'browse-lcc' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/LCC',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'LCC',
          ),
        ),
      ),
      'browse-region' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Region',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Region',
          ),
        ),
      ),
      'browse-tag' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Tag',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Tag',
          ),
        ),
      ),
      'browse-topic' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Browse/Topic',
          'defaults' => 
          array (
            'controller' => 'Browse',
            'action' => 'Topic',
          ),
        ),
      ),
      'cart-doexport' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/doExport',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'doExport',
          ),
        ),
      ),
      'browzine-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/BrowZine/Home',
          'defaults' => 
          array (
            'controller' => 'BrowZine',
            'action' => 'Home',
          ),
        ),
      ),
      'browzine-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/BrowZine/Search',
          'defaults' => 
          array (
            'controller' => 'BrowZine',
            'action' => 'Search',
          ),
        ),
      ),
      'cart-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Email',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Email',
          ),
        ),
      ),
      'cart-export' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Export',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Export',
          ),
        ),
      ),
      'cart-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Home',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Home',
          ),
        ),
      ),
      'cart-myresearchbulk' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/MyResearchBulk',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'MyResearchBulk',
          ),
        ),
      ),
      'cart-processor' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Processor',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Processor',
          ),
        ),
      ),
      'cart-save' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/Save',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'Save',
          ),
        ),
      ),
      'cart-searchresultsbulk' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cart/SearchResultsBulk',
          'defaults' => 
          array (
            'controller' => 'Cart',
            'action' => 'SearchResultsBulk',
          ),
        ),
      ),
      'channels-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Channels/Home',
          'defaults' => 
          array (
            'controller' => 'Channels',
            'action' => 'Home',
          ),
        ),
      ),
      'channels-record' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Channels/Record',
          'defaults' => 
          array (
            'controller' => 'Channels',
            'action' => 'Record',
          ),
        ),
      ),
      'channels-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Channels/Search',
          'defaults' => 
          array (
            'controller' => 'Channels',
            'action' => 'Search',
          ),
        ),
      ),
      'collections-bytitle' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Collections/ByTitle',
          'defaults' => 
          array (
            'controller' => 'Collections',
            'action' => 'ByTitle',
          ),
        ),
      ),
      'collections-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Collections/Home',
          'defaults' => 
          array (
            'controller' => 'Collections',
            'action' => 'Home',
          ),
        ),
      ),
      'combined-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Combined/Home',
          'defaults' => 
          array (
            'controller' => 'Combined',
            'action' => 'Home',
          ),
        ),
      ),
      'combined-results' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Combined/Results',
          'defaults' => 
          array (
            'controller' => 'Combined',
            'action' => 'Results',
          ),
        ),
      ),
      'combined-searchbox' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Combined/SearchBox',
          'defaults' => 
          array (
            'controller' => 'Combined',
            'action' => 'SearchBox',
          ),
        ),
      ),
      'confirm-confirm' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Confirm/Confirm',
          'defaults' => 
          array (
            'controller' => 'Confirm',
            'action' => 'Confirm',
          ),
        ),
      ),
      'cover-show' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cover/Show',
          'defaults' => 
          array (
            'controller' => 'Cover',
            'action' => 'Show',
          ),
        ),
      ),
      'cover-unavailable' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Cover/Unavailable',
          'defaults' => 
          array (
            'controller' => 'Cover',
            'action' => 'Unavailable',
          ),
        ),
      ),
      'eds-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EDS/Advanced',
          'defaults' => 
          array (
            'controller' => 'EDS',
            'action' => 'Advanced',
          ),
        ),
      ),
      'eds-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EDS/Home',
          'defaults' => 
          array (
            'controller' => 'EDS',
            'action' => 'Home',
          ),
        ),
      ),
      'eds-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EDS/Search',
          'defaults' => 
          array (
            'controller' => 'EDS',
            'action' => 'Search',
          ),
        ),
      ),
      'eit-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EIT/Advanced',
          'defaults' => 
          array (
            'controller' => 'EIT',
            'action' => 'Advanced',
          ),
        ),
      ),
      'eit-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EIT/Home',
          'defaults' => 
          array (
            'controller' => 'EIT',
            'action' => 'Home',
          ),
        ),
      ),
      'eit-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/EIT/Search',
          'defaults' => 
          array (
            'controller' => 'EIT',
            'action' => 'Search',
          ),
        ),
      ),
      'error-permissiondenied' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Error/PermissionDenied',
          'defaults' => 
          array (
            'controller' => 'Error',
            'action' => 'PermissionDenied',
          ),
        ),
      ),
      'error-unavailable' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Error/Unavailable',
          'defaults' => 
          array (
            'controller' => 'Error',
            'action' => 'Unavailable',
          ),
        ),
      ),
      'feedback-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Feedback/Email',
          'defaults' => 
          array (
            'controller' => 'Feedback',
            'action' => 'Email',
          ),
        ),
      ),
      'feedback-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Feedback/Home',
          'defaults' => 
          array (
            'controller' => 'Feedback',
            'action' => 'Home',
          ),
        ),
      ),
      'help-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Help/Home',
          'defaults' => 
          array (
            'controller' => 'Help',
            'action' => 'Home',
          ),
        ),
      ),
      'install-done' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/Done',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'Done',
          ),
        ),
      ),
      'install-fixbasicconfig' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixBasicConfig',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixBasicConfig',
          ),
        ),
      ),
      'install-fixcache' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixCache',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixCache',
          ),
        ),
      ),
      'install-fixdatabase' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixDatabase',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixDatabase',
          ),
        ),
      ),
      'install-fixdependencies' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixDependencies',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixDependencies',
          ),
        ),
      ),
      'install-fixils' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixILS',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixILS',
          ),
        ),
      ),
      'install-fixsecurity' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixSecurity',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixSecurity',
          ),
        ),
      ),
      'install-fixsolr' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixSolr',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixSolr',
          ),
        ),
      ),
      'install-fixsslcerts' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/FixSSLCerts',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'FixSSLCerts',
          ),
        ),
      ),
      'install-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/Home',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'Home',
          ),
        ),
      ),
      'install-performsecurityfix' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/PerformSecurityFix',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'PerformSecurityFix',
          ),
        ),
      ),
      'install-showsql' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Install/ShowSQL',
          'defaults' => 
          array (
            'controller' => 'Install',
            'action' => 'ShowSQL',
          ),
        ),
      ),
      'libguides-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibGuides/Home',
          'defaults' => 
          array (
            'controller' => 'LibGuides',
            'action' => 'Home',
          ),
        ),
      ),
      'libguides-results' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibGuides/Results',
          'defaults' => 
          array (
            'controller' => 'LibGuides',
            'action' => 'Results',
          ),
        ),
      ),
      'librarycards-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibraryCards/Home',
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'Home',
          ),
        ),
      ),
      'librarycards-selectcard' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibraryCards/SelectCard',
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'SelectCard',
          ),
        ),
      ),
      'librarycards-deletecard' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/LibraryCards/DeleteCard',
          'defaults' => 
          array (
            'controller' => 'LibraryCards',
            'action' => 'DeleteCard',
          ),
        ),
      ),
      'myresearch-account' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Account',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Account',
          ),
        ),
      ),
      'myresearch-changepassword' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/ChangePassword',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'ChangePassword',
          ),
        ),
      ),
      'myresearch-checkedout' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/CheckedOut',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'CheckedOut',
          ),
        ),
      ),
      'myresearch-delete' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Delete',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Delete',
          ),
        ),
      ),
      'myresearch-deleteaccount' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/DeleteAccount',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'DeleteAccount',
          ),
        ),
      ),
      'myresearch-deletelist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/DeleteList',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'DeleteList',
          ),
        ),
      ),
      'myresearch-edit' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Edit',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Edit',
          ),
        ),
      ),
      'myresearch-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Email',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Email',
          ),
        ),
      ),
      'myresearch-favorites' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Favorites',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Favorites',
          ),
        ),
      ),
      'myresearch-fines' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Fines',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Fines',
          ),
        ),
      ),
      'myresearch-historicloans' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/HistoricLoans',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'HistoricLoans',
          ),
        ),
      ),
      'myresearch-holds' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Holds',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Holds',
          ),
        ),
      ),
      'myresearch-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Home',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Home',
          ),
        ),
      ),
      'myresearch-illrequests' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/ILLRequests',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'ILLRequests',
          ),
        ),
      ),
      'myresearch-logout' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Logout',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Logout',
          ),
        ),
      ),
      'myresearch-newpassword' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/NewPassword',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'NewPassword',
          ),
        ),
      ),
      'myresearch-profile' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Profile',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Profile',
          ),
        ),
      ),
      'myresearch-recover' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Recover',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Recover',
          ),
        ),
      ),
      'myresearch-savesearch' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/SaveSearch',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'SaveSearch',
          ),
        ),
      ),
      'myresearch-storageretrievalrequests' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/StorageRetrievalRequests',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'StorageRetrievalRequests',
          ),
        ),
      ),
      'myresearch-userlogin' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/UserLogin',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'UserLogin',
          ),
        ),
      ),
      'myresearch-verify' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/MyResearch/Verify',
          'defaults' => 
          array (
            'controller' => 'MyResearch',
            'action' => 'Verify',
          ),
        ),
      ),
      'oai-server' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/OAI/Server',
          'defaults' => 
          array (
            'controller' => 'OAI',
            'action' => 'Server',
          ),
        ),
      ),
      'pazpar2-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Pazpar2/Home',
          'defaults' => 
          array (
            'controller' => 'Pazpar2',
            'action' => 'Home',
          ),
        ),
      ),
      'pazpar2-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Pazpar2/Search',
          'defaults' => 
          array (
            'controller' => 'Pazpar2',
            'action' => 'Search',
          ),
        ),
      ),
      'primo-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Primo/Advanced',
          'defaults' => 
          array (
            'controller' => 'Primo',
            'action' => 'Advanced',
          ),
        ),
      ),
      'primo-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Primo/Home',
          'defaults' => 
          array (
            'controller' => 'Primo',
            'action' => 'Home',
          ),
        ),
      ),
      'primo-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Primo/Search',
          'defaults' => 
          array (
            'controller' => 'Primo',
            'action' => 'Search',
          ),
        ),
      ),
      'qrcode-show' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/QRCode/Show',
          'defaults' => 
          array (
            'controller' => 'QRCode',
            'action' => 'Show',
          ),
        ),
      ),
      'qrcode-unavailable' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/QRCode/Unavailable',
          'defaults' => 
          array (
            'controller' => 'QRCode',
            'action' => 'Unavailable',
          ),
        ),
      ),
      'records-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Records/Home',
          'defaults' => 
          array (
            'controller' => 'Records',
            'action' => 'Home',
          ),
        ),
      ),
      'relais-login' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Relais/Login',
          'defaults' => 
          array (
            'controller' => 'Relais',
            'action' => 'Login',
          ),
        ),
      ),
      'relais-request' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Relais/Request',
          'defaults' => 
          array (
            'controller' => 'Relais',
            'action' => 'Request',
          ),
        ),
      ),
      'search-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Advanced',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Advanced',
          ),
        ),
      ),
      'search-collectionfacetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/CollectionFacetList',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'CollectionFacetList',
          ),
        ),
      ),
      'search-email' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Email',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Email',
          ),
        ),
      ),
      'search-facetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/FacetList',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'FacetList',
          ),
        ),
      ),
      'search-history' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/History',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'History',
          ),
        ),
      ),
      'search-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Home',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Home',
          ),
        ),
      ),
      'search-newitem' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/NewItem',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'NewItem',
          ),
        ),
      ),
      'search-opensearch' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/OpenSearch',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'OpenSearch',
          ),
        ),
      ),
      'search-reserves' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Reserves',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Reserves',
          ),
        ),
      ),
      'search-reservesfacetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/ReservesFacetList',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'ReservesFacetList',
          ),
        ),
      ),
      'search-results' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Results',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Results',
          ),
        ),
      ),
      'search-suggest' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search/Suggest',
          'defaults' => 
          array (
            'controller' => 'Search',
            'action' => 'Suggest',
          ),
        ),
      ),
      'search2-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/Advanced',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'Advanced',
          ),
        ),
      ),
      'search2-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/Home',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'Home',
          ),
        ),
      ),
      'search2-results' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Search2/Results',
          'defaults' => 
          array (
            'controller' => 'Search2',
            'action' => 'Results',
          ),
        ),
      ),
      'summon-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Advanced',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'Advanced',
          ),
        ),
      ),
      'summon-facetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/FacetList',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'FacetList',
          ),
        ),
      ),
      'summon-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Home',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'Home',
          ),
        ),
      ),
      'summon-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Summon/Search',
          'defaults' => 
          array (
            'controller' => 'Summon',
            'action' => 'Search',
          ),
        ),
      ),
      'tag-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Tag/Home',
          'defaults' => 
          array (
            'controller' => 'Tag',
            'action' => 'Home',
          ),
        ),
      ),
      'upgrade-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/Home',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'Home',
          ),
        ),
      ),
      'upgrade-fixanonymoustags' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixAnonymousTags',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixAnonymousTags',
          ),
        ),
      ),
      'upgrade-fixduplicatetags' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixDuplicateTags',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixDuplicateTags',
          ),
        ),
      ),
      'upgrade-fixconfig' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixConfig',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixConfig',
          ),
        ),
      ),
      'upgrade-fixdatabase' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixDatabase',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixDatabase',
          ),
        ),
      ),
      'upgrade-fixmetadata' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/FixMetadata',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'FixMetadata',
          ),
        ),
      ),
      'upgrade-getdbcredentials' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetDBCredentials',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetDBCredentials',
          ),
        ),
      ),
      'upgrade-getdbencodingpreference' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetDbEncodingPreference',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetDbEncodingPreference',
          ),
        ),
      ),
      'upgrade-getsourcedir' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetSourceDir',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetSourceDir',
          ),
        ),
      ),
      'upgrade-getsourceversion' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/GetSourceVersion',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'GetSourceVersion',
          ),
        ),
      ),
      'upgrade-reset' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/Reset',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'Reset',
          ),
        ),
      ),
      'upgrade-showsql' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Upgrade/ShowSQL',
          'defaults' => 
          array (
            'controller' => 'Upgrade',
            'action' => 'ShowSQL',
          ),
        ),
      ),
      'web-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Web/Home',
          'defaults' => 
          array (
            'controller' => 'Web',
            'action' => 'Home',
          ),
        ),
      ),
      'web-facetlist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Web/FacetList',
          'defaults' => 
          array (
            'controller' => 'Web',
            'action' => 'FacetList',
          ),
        ),
      ),
      'web-results' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Web/Results',
          'defaults' => 
          array (
            'controller' => 'Web',
            'action' => 'Results',
          ),
        ),
      ),
      'worldcat-advanced' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Worldcat/Advanced',
          'defaults' => 
          array (
            'controller' => 'Worldcat',
            'action' => 'Advanced',
          ),
        ),
      ),
      'worldcat-home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Worldcat/Home',
          'defaults' => 
          array (
            'controller' => 'Worldcat',
            'action' => 'Home',
          ),
        ),
      ),
      'worldcat-search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Worldcat/Search',
          'defaults' => 
          array (
            'controller' => 'Worldcat',
            'action' => 'Search',
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'index',
            'action' => 'Home',
          ),
        ),
      ),
      'admin' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/Admin',
          'defaults' => 
          array (
            'controller' => 'Admin',
            'action' => 'Home',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'disabled' => 
          array (
            'type' => 'Zend\\Router\\Http\\Literal',
            'options' => 
            array (
              'route' => '/Disabled',
              'defaults' => 
              array (
                'controller' => 'Admin',
                'action' => 'Disabled',
              ),
            ),
          ),
          'config' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Config[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminConfig',
                'action' => 'Home',
              ),
            ),
          ),
          'maintenance' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Maintenance[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminMaintenance',
                'action' => 'Home',
              ),
            ),
          ),
          'social' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Social[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminSocial',
                'action' => 'Home',
              ),
            ),
          ),
          'tags' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/Tags[/:action]',
              'defaults' => 
              array (
                'controller' => 'AdminTags',
                'action' => 'Home',
              ),
            ),
          ),
        ),
      ),
      'apiHome' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api[/v1][/]',
          'defaults' => 
          array (
            'controller' => 'Api',
            'action' => 'Index',
          ),
        ),
      ),
      'searchApiv1' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/search',
          'defaults' => 
          array (
            'controller' => 'SearchApi',
            'action' => 'search',
          ),
        ),
      ),
      'recordApiv1' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'verb' => 'get,post,options',
        'options' => 
        array (
          'route' => '/api/v1/record',
          'defaults' => 
          array (
            'controller' => 'SearchApi',
            'action' => 'record',
          ),
        ),
      ),
    ),
  ),
  'view_helpers' => 
  array (
    'factories' => 
    array (
      'ZfcRbac\\View\\Helper\\IsGranted' => 'ZfcRbac\\Factory\\IsGrantedViewHelperFactory',
      'ZfcRbac\\View\\Helper\\HasRole' => 'ZfcRbac\\Factory\\HasRoleViewHelperFactory',
    ),
    'aliases' => 
    array (
      'isGranted' => 'ZfcRbac\\View\\Helper\\IsGranted',
      'hasRole' => 'ZfcRbac\\View\\Helper\\HasRole',
    ),
    'initializers' => 
    array (
      0 => 'VuFind\\ServiceManager\\ServiceInitializer',
    ),
  ),
  'controller_plugins' => 
  array (
    'factories' => 
    array (
      'ZfcRbac\\Mvc\\Controller\\Plugin\\IsGranted' => 'ZfcRbac\\Factory\\IsGrantedPluginFactory',
      'VuFind\\Controller\\Plugin\\DbUpgrade' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Controller\\Plugin\\Favorites' => 'VuFind\\Controller\\Plugin\\Factory::getFavorites',
      'VuFind\\Controller\\Plugin\\Followup' => 'VuFind\\Controller\\Plugin\\Factory::getFollowup',
      'VuFind\\Controller\\Plugin\\Holds' => 'VuFind\\Controller\\Plugin\\Factory::getHolds',
      'VuFind\\Controller\\Plugin\\ILLRequests' => 'VuFind\\Controller\\Plugin\\Factory::getILLRequests',
      'VuFind\\Controller\\Plugin\\NewItems' => 'VuFind\\Controller\\Plugin\\Factory::getNewItems',
      'VuFind\\Controller\\Plugin\\Permission' => 'VuFind\\Controller\\Plugin\\Factory::getPermission',
      'VuFind\\Controller\\Plugin\\Recaptcha' => 'VuFind\\Controller\\Plugin\\Factory::getRecaptcha',
      'VuFind\\Controller\\Plugin\\Renewals' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'VuFind\\Controller\\Plugin\\Reserves' => 'VuFind\\Controller\\Plugin\\Factory::getReserves',
      'VuFind\\Controller\\Plugin\\ResultScroller' => 'VuFind\\Controller\\Plugin\\Factory::getResultScroller',
      'VuFind\\Controller\\Plugin\\StorageRetrievalRequests' => 'VuFind\\Controller\\Plugin\\Factory::getStorageRetrievalRequests',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'VuFind\\Controller\\Plugin\\Factory::getFlashMessenger',
    ),
    'aliases' => 
    array (
      'isGranted' => 'ZfcRbac\\Mvc\\Controller\\Plugin\\IsGranted',
      'dbUpgrade' => 'VuFind\\Controller\\Plugin\\DbUpgrade',
      'favorites' => 'VuFind\\Controller\\Plugin\\Favorites',
      'flashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'followup' => 'VuFind\\Controller\\Plugin\\Followup',
      'holds' => 'VuFind\\Controller\\Plugin\\Holds',
      'ILLRequests' => 'VuFind\\Controller\\Plugin\\ILLRequests',
      'newItems' => 'VuFind\\Controller\\Plugin\\NewItems',
      'permission' => 'VuFind\\Controller\\Plugin\\Permission',
      'recaptcha' => 'VuFind\\Controller\\Plugin\\Recaptcha',
      'renewals' => 'VuFind\\Controller\\Plugin\\Renewals',
      'reserves' => 'VuFind\\Controller\\Plugin\\Reserves',
      'resultScroller' => 'VuFind\\Controller\\Plugin\\ResultScroller',
      'storageRetrievalRequests' => 'VuFind\\Controller\\Plugin\\StorageRetrievalRequests',
    ),
  ),
  'view_manager' => 
  array (
    'template_map' => 
    array (
      'error/403' => '/usr/local/vufind/vendor/zf-commons/zfc-rbac/config/../view/error/403.phtml',
      'zend-developer-tools/toolbar/zfc-rbac' => '/usr/local/vufind/vendor/zf-commons/zfc-rbac/config/../view/zend-developer-tools/toolbar/zfc-rbac.phtml',
    ),
    'display_not_found_reason' => false,
    'display_exceptions' => false,
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
    'template_path_stack' => 
    array (
    ),
    'whoops_no_catch' => 
    array (
      0 => 'VuFind\\Exception\\RecordMissing',
    ),
  ),
  'zenddevelopertools' => 
  array (
    'profiler' => 
    array (
      'collectors' => 
      array (
        'zfc_rbac' => 'ZfcRbac\\Collector\\RbacCollector',
      ),
    ),
    'toolbar' => 
    array (
      'entries' => 
      array (
        'zfc_rbac' => 'zend-developer-tools/toolbar/zfc-rbac',
      ),
    ),
  ),
  'zfc_rbac' => 
  array (
    'guard_manager' => 
    array (
    ),
    'role_provider_manager' => 
    array (
      'factories' => 
      array (
        'VuFind\\Role\\DynamicRoleProvider' => 'VuFind\\Role\\DynamicRoleProviderFactory',
      ),
    ),
    'assertion_manager' => 
    array (
    ),
    'identity_provider' => 'VuFind\\Auth\\Manager',
    'guest_role' => 'guest',
    'role_provider' => 
    array (
      'VuFind\\Role\\DynamicRoleProvider' => 
      array (
        'map_legacy_settings' => true,
      ),
    ),
    'vufind_permission_provider_manager' => 
    array (
    ),
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'VuFind\\Controller\\AjaxController' => 'VuFind\\Controller\\AjaxControllerFactory',
      'VuFind\\Controller\\AlmaController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\AlphabrowseController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\AuthorController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\AuthorityController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\BrowseController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\BrowZineController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\CartController' => 'VuFind\\Controller\\CartControllerFactory',
      'VuFind\\Controller\\ChannelsController' => 'VuFind\\Controller\\ChannelsControllerFactory',
      'VuFind\\Controller\\CollectionController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\CollectionsController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\CombinedController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ConfirmController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ContentController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\CoverController' => 'VuFind\\Controller\\CoverControllerFactory',
      'VuFind\\Controller\\EdsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\EdsrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\EITController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\EITrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ErrorController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ExternalAuthController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\FeedbackController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Search2Controller' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Search2recordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\HelpController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\HierarchyController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\IndexController' => 'VuFind\\Controller\\IndexControllerFactory',
      'VuFind\\Controller\\InstallController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\LibGuidesController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\LibraryCardsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\MissingrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\MyResearchController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\OaiController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\Pazpar2Controller' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\PrimoController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\PrimorecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\QRCodeController' => 'VuFind\\Controller\\QRCodeControllerFactory',
      'VuFind\\Controller\\RecordController' => 'VuFind\\Controller\\AbstractBaseWithConfigFactory',
      'VuFind\\Controller\\RecordsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\RelaisController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\SearchController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\ShibbolethLogoutNotificationController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\SummonController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\SummonrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\TagController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\UpgradeController' => 'VuFind\\Controller\\UpgradeControllerFactory',
      'VuFind\\Controller\\WebController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\WorldcatController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFind\\Controller\\WorldcatrecordController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\AdminController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\ConfigController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\MaintenanceController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\SocialstatsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindAdmin\\Controller\\TagsController' => 'VuFind\\Controller\\AbstractBaseFactory',
      'VuFindApi\\Controller\\ApiController' => 'VuFindApi\\Controller\\Factory::getApiController',
      'VuFindApi\\Controller\\SearchApiController' => 'VuFindApi\\Controller\\Factory::getSearchApiController',
    ),
    'aliases' => 
    array (
      'AJAX' => 'VuFind\\Controller\\AjaxController',
      'ajax' => 'VuFind\\Controller\\AjaxController',
      'Alma' => 'VuFind\\Controller\\AlmaController',
      'alma' => 'VuFind\\Controller\\AlmaController',
      'Alphabrowse' => 'VuFind\\Controller\\AlphabrowseController',
      'alphabrowse' => 'VuFind\\Controller\\AlphabrowseController',
      'Author' => 'VuFind\\Controller\\AuthorController',
      'author' => 'VuFind\\Controller\\AuthorController',
      'Authority' => 'VuFind\\Controller\\AuthorityController',
      'authority' => 'VuFind\\Controller\\AuthorityController',
      'Browse' => 'VuFind\\Controller\\BrowseController',
      'browse' => 'VuFind\\Controller\\BrowseController',
      'BrowZine' => 'VuFind\\Controller\\BrowZineController',
      'browzine' => 'VuFind\\Controller\\BrowZineController',
      'Cart' => 'VuFind\\Controller\\CartController',
      'cart' => 'VuFind\\Controller\\CartController',
      'Channels' => 'VuFind\\Controller\\ChannelsController',
      'channels' => 'VuFind\\Controller\\ChannelsController',
      'Collection' => 'VuFind\\Controller\\CollectionController',
      'collection' => 'VuFind\\Controller\\CollectionController',
      'Collections' => 'VuFind\\Controller\\CollectionsController',
      'collections' => 'VuFind\\Controller\\CollectionsController',
      'Combined' => 'VuFind\\Controller\\CombinedController',
      'combined' => 'VuFind\\Controller\\CombinedController',
      'Confirm' => 'VuFind\\Controller\\ConfirmController',
      'confirm' => 'VuFind\\Controller\\ConfirmController',
      'Content' => 'VuFind\\Controller\\ContentController',
      'content' => 'VuFind\\Controller\\ContentController',
      'Cover' => 'VuFind\\Controller\\CoverController',
      'cover' => 'VuFind\\Controller\\CoverController',
      'EDS' => 'VuFind\\Controller\\EdsController',
      'eds' => 'VuFind\\Controller\\EdsController',
      'EdsRecord' => 'VuFind\\Controller\\EdsrecordController',
      'edsrecord' => 'VuFind\\Controller\\EdsrecordController',
      'EIT' => 'VuFind\\Controller\\EITController',
      'eit' => 'VuFind\\Controller\\EITController',
      'EITRecord' => 'VuFind\\Controller\\EITrecordController',
      'eitrecord' => 'VuFind\\Controller\\EITrecordController',
      'Error' => 'VuFind\\Controller\\ErrorController',
      'error' => 'VuFind\\Controller\\ErrorController',
      'ExternalAuth' => 'VuFind\\Controller\\ExternalAuthController',
      'externalauth' => 'VuFind\\Controller\\ExternalAuthController',
      'Feedback' => 'VuFind\\Controller\\FeedbackController',
      'feedback' => 'VuFind\\Controller\\FeedbackController',
      'Search2' => 'VuFind\\Controller\\Search2Controller',
      'search2' => 'VuFind\\Controller\\Search2Controller',
      'Search2Record' => 'VuFind\\Controller\\Search2recordController',
      'search2record' => 'VuFind\\Controller\\Search2recordController',
      'Help' => 'VuFind\\Controller\\HelpController',
      'help' => 'VuFind\\Controller\\HelpController',
      'Hierarchy' => 'VuFind\\Controller\\HierarchyController',
      'hierarchy' => 'VuFind\\Controller\\HierarchyController',
      'Index' => 'VuFind\\Controller\\IndexController',
      'index' => 'VuFind\\Controller\\IndexController',
      'Install' => 'VuFind\\Controller\\InstallController',
      'install' => 'VuFind\\Controller\\InstallController',
      'LibGuides' => 'VuFind\\Controller\\LibGuidesController',
      'libguides' => 'VuFind\\Controller\\LibGuidesController',
      'LibraryCards' => 'VuFind\\Controller\\LibraryCardsController',
      'librarycards' => 'VuFind\\Controller\\LibraryCardsController',
      'MissingRecord' => 'VuFind\\Controller\\MissingrecordController',
      'missingrecord' => 'VuFind\\Controller\\MissingrecordController',
      'MyResearch' => 'VuFind\\Controller\\MyResearchController',
      'myresearch' => 'VuFind\\Controller\\MyResearchController',
      'OAI' => 'VuFind\\Controller\\OaiController',
      'oai' => 'VuFind\\Controller\\OaiController',
      'Pazpar2' => 'VuFind\\Controller\\Pazpar2Controller',
      'pazpar2' => 'VuFind\\Controller\\Pazpar2Controller',
      'Primo' => 'VuFind\\Controller\\PrimoController',
      'primo' => 'VuFind\\Controller\\PrimoController',
      'PrimoRecord' => 'VuFind\\Controller\\PrimorecordController',
      'primorecord' => 'VuFind\\Controller\\PrimorecordController',
      'QRCode' => 'VuFind\\Controller\\QRCodeController',
      'qrcode' => 'VuFind\\Controller\\QRCodeController',
      'Record' => 'VuFind\\Controller\\RecordController',
      'record' => 'VuFind\\Controller\\RecordController',
      'Records' => 'VuFind\\Controller\\RecordsController',
      'records' => 'VuFind\\Controller\\RecordsController',
      'Relais' => 'VuFind\\Controller\\RelaisController',
      'relais' => 'VuFind\\Controller\\RelaisController',
      'Search' => 'VuFind\\Controller\\SearchController',
      'search' => 'VuFind\\Controller\\SearchController',
      'ShibbolethLogoutNotification' => 'VuFind\\Controller\\ShibbolethLogoutNotificationController',
      'shibbolethlogoutnotification' => 'VuFind\\Controller\\ShibbolethLogoutNotificationController',
      'Summon' => 'VuFind\\Controller\\SummonController',
      'summon' => 'VuFind\\Controller\\SummonController',
      'SummonRecord' => 'VuFind\\Controller\\SummonrecordController',
      'summonrecord' => 'VuFind\\Controller\\SummonrecordController',
      'Tag' => 'VuFind\\Controller\\TagController',
      'tag' => 'VuFind\\Controller\\TagController',
      'Upgrade' => 'VuFind\\Controller\\UpgradeController',
      'upgrade' => 'VuFind\\Controller\\UpgradeController',
      'Web' => 'VuFind\\Controller\\WebController',
      'web' => 'VuFind\\Controller\\WebController',
      'Worldcat' => 'VuFind\\Controller\\WorldcatController',
      'worldcat' => 'VuFind\\Controller\\WorldcatController',
      'WorldcatRecord' => 'VuFind\\Controller\\WorldcatrecordController',
      'worldcatrecord' => 'VuFind\\Controller\\WorldcatrecordController',
      'Admin' => 'VuFindAdmin\\Controller\\AdminController',
      'AdminConfig' => 'VuFindAdmin\\Controller\\ConfigController',
      'AdminMaintenance' => 'VuFindAdmin\\Controller\\MaintenanceController',
      'AdminSocial' => 'VuFindAdmin\\Controller\\SocialstatsController',
      'AdminTags' => 'VuFindAdmin\\Controller\\TagsController',
      'Api' => 'VuFindApi\\Controller\\ApiController',
      'SearchApi' => 'VuFindApi\\Controller\\SearchApiController',
    ),
  ),
  'translator' => 
  array (
  ),
  'vufind' => 
  array (
    'config_reader' => 
    array (
    ),
    'pgsql_seq_mapping' => 
    array (
      'comments' => 
      array (
        0 => 'id',
        1 => 'comments_id_seq',
      ),
      'external_session' => 
      array (
        0 => 'id',
        1 => 'external_session_id_seq',
      ),
      'oai_resumption' => 
      array (
        0 => 'id',
        1 => 'oai_resumption_id_seq',
      ),
      'record' => 
      array (
        0 => 'id',
        1 => 'record_id_seq',
      ),
      'resource' => 
      array (
        0 => 'id',
        1 => 'resource_id_seq',
      ),
      'resource_tags' => 
      array (
        0 => 'id',
        1 => 'resource_tags_id_seq',
      ),
      'search' => 
      array (
        0 => 'id',
        1 => 'search_id_seq',
      ),
      'session' => 
      array (
        0 => 'id',
        1 => 'session_id_seq',
      ),
      'tags' => 
      array (
        0 => 'id',
        1 => 'tags_id_seq',
      ),
      'user' => 
      array (
        0 => 'id',
        1 => 'user_id_seq',
      ),
      'user_card' => 
      array (
        0 => 'id',
        1 => 'user_card_id_seq',
      ),
      'user_list' => 
      array (
        0 => 'id',
        1 => 'user_list_id_seq',
      ),
      'user_resource' => 
      array (
        0 => 'id',
        1 => 'user_resource_id_seq',
      ),
    ),
    'plugin_managers' => 
    array (
      'ajaxhandler' => 
      array (
      ),
      'auth' => 
      array (
      ),
      'autocomplete' => 
      array (
      ),
      'channelprovider' => 
      array (
      ),
      'content' => 
      array (
      ),
      'content_authornotes' => 
      array (
      ),
      'content_covers' => 
      array (
      ),
      'content_excerpts' => 
      array (
      ),
      'content_reviews' => 
      array (
      ),
      'content_summaries' => 
      array (
      ),
      'content_toc' => 
      array (
      ),
      'contentblock' => 
      array (
      ),
      'cover_layer' => 
      array (
      ),
      'db_row' => 
      array (
      ),
      'db_table' => 
      array (
      ),
      'hierarchy_driver' => 
      array (
      ),
      'hierarchy_treedataformatter' => 
      array (
      ),
      'hierarchy_treedatasource' => 
      array (
      ),
      'hierarchy_treerenderer' => 
      array (
      ),
      'ils_driver' => 
      array (
      ),
      'recommend' => 
      array (
      ),
      'recorddriver' => 
      array (
      ),
      'recordtab' => 
      array (
      ),
      'related' => 
      array (
      ),
      'resolver_driver' => 
      array (
      ),
      'search_backend' => 
      array (
      ),
      'search_facetcache' => 
      array (
      ),
      'search_options' => 
      array (
      ),
      'search_params' => 
      array (
      ),
      'search_results' => 
      array (
      ),
      'session' => 
      array (
      ),
    ),
    'recorddriver_collection_tabs' => 
    array (
      'VuFind\\RecordDriver\\AbstractBase' => 
      array (
        'tabs' => 
        array (
          'CollectionList' => 'CollectionList',
          'HierarchyTree' => 'CollectionHierarchyTree',
        ),
        'defaultTab' => NULL,
      ),
    ),
    'recorddriver_tabs' => 
    array (
      'VuFind\\RecordDriver\\EDS' => 
      array (
        'tabs' => 
        array (
          'Description' => 'Description',
          'TOC' => 'TOC',
          'UserComments' => 'UserComments',
          'Reviews' => 'Reviews',
          'Excerpt' => 'Excerpt',
          'Preview' => 'preview',
          'Details' => 'StaffViewArray',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\Pazpar2' => 
      array (
        'tabs' => 
        array (
          'Details' => 'StaffViewMARC',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\Primo' => 
      array (
        'tabs' => 
        array (
          'Description' => 'Description',
          'TOC' => 'TOC',
          'UserComments' => 'UserComments',
          'Reviews' => 'Reviews',
          'Excerpt' => 'Excerpt',
          'Preview' => 'preview',
          'Details' => 'StaffViewArray',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\SolrAuthDefault' => 
      array (
        'tabs' => 
        array (
          'Details' => 'StaffViewArray',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\SolrAuthMarc' => 
      array (
        'tabs' => 
        array (
          'Details' => 'StaffViewMARC',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\DefaultRecord' => 
      array (
        'tabs' => 
        array (
          'Holdings' => 'HoldingsILS',
          'Description' => 'Description',
          'TOC' => 'TOC',
          'UserComments' => 'UserComments',
          'Reviews' => 'Reviews',
          'Excerpt' => 'Excerpt',
          'Preview' => 'preview',
          'HierarchyTree' => 'HierarchyTree',
          'Map' => 'Map',
          'Similar' => 'SimilarItemsCarousel',
          'Details' => 'StaffViewArray',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\SolrMarc' => 
      array (
        'tabs' => 
        array (
          'Holdings' => 'HoldingsILS',
          'Description' => 'Description',
          'TOC' => 'TOC',
          'UserComments' => 'UserComments',
          'Reviews' => 'Reviews',
          'Excerpt' => 'Excerpt',
          'Preview' => 'preview',
          'HierarchyTree' => 'HierarchyTree',
          'Map' => 'Map',
          'Similar' => 'SimilarItemsCarousel',
          'Details' => 'StaffViewMARC',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\Summon' => 
      array (
        'tabs' => 
        array (
          'Description' => 'Description',
          'TOC' => 'TOC',
          'UserComments' => 'UserComments',
          'Reviews' => 'Reviews',
          'Excerpt' => 'Excerpt',
          'Preview' => 'preview',
          'Details' => 'StaffViewArray',
        ),
        'defaultTab' => NULL,
      ),
      'VuFind\\RecordDriver\\WorldCat' => 
      array (
        'tabs' => 
        array (
          'Holdings' => 'HoldingsWorldCat',
          'Description' => 'Description',
          'TOC' => 'TOC',
          'UserComments' => 'UserComments',
          'Reviews' => 'Reviews',
          'Excerpt' => 'Excerpt',
          'Details' => 'StaffViewMARC',
        ),
        'defaultTab' => NULL,
      ),
    ),
  ),
);