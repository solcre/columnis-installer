<?php
return array(
    'router' => array(
        'routes' => array(
            'installer.rest.accounts' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/accounts[/:accounts_id]',
                    'defaults' => array(
                        'controller' => 'installer\\V1\\Rest\\Accounts\\Controller',
                    ),
                ),
            ),
            'installer.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'installer\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'installer.rest.customers' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customers[/:customers_id]',
                    'defaults' => array(
                        'controller' => 'installer\\V1\\Rest\\Customers\\Controller',
                    ),
                ),
            ),
            'installer.rest.licenses' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/licenses[/:licenses_id]',
                    'defaults' => array(
                        'controller' => 'installer\\V1\\Rest\\Licenses\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'installer.rest.accounts',
            1 => 'installer.rest.users',
            2 => 'installer.rest.customers',
            3 => 'installer.rest.licenses',
        ),
    ),
    'service_manager' => array(
        'factories' => array(),
    ),
    'zf-rest' => array(
        'installer\\V1\\Rest\\Accounts\\Controller' => array(
            'listener' => 'installer\\V1\\Rest\\Accounts\\AccountsResource',
            'route_name' => 'installer.rest.accounts',
            'route_identifier_name' => 'accounts_id',
            'collection_name' => 'accounts',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'installer\\V1\\Rest\\Accounts\\AccountsEntity',
            'collection_class' => 'installer\\V1\\Rest\\Accounts\\AccountsCollection',
            'service_name' => 'accounts',
        ),
        'installer\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'installer\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'installer.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'installer\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'installer\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'installer\\V1\\Rest\\Customers\\Controller' => array(
            'listener' => 'installer\\V1\\Rest\\Customers\\CustomersResource',
            'route_name' => 'installer.rest.customers',
            'route_identifier_name' => 'customers_id',
            'collection_name' => 'customers',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'installer\\V1\\Rest\\Customers\\CustomersEntity',
            'collection_class' => 'installer\\V1\\Rest\\Customers\\CustomersCollection',
            'service_name' => 'customers',
        ),
        'installer\\V1\\Rest\\Licenses\\Controller' => array(
            'listener' => 'installer\\V1\\Rest\\Licenses\\LicensesResource',
            'route_name' => 'installer.rest.licenses',
            'route_identifier_name' => 'licenses_id',
            'collection_name' => 'licenses',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'installer\\V1\\Rest\\Licenses\\LicensesEntity',
            'collection_class' => 'installer\\V1\\Rest\\Licenses\\LicensesCollection',
            'service_name' => 'licenses',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'installer\\V1\\Rest\\Accounts\\Controller' => 'HalJson',
            'installer\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'installer\\V1\\Rest\\Customers\\Controller' => 'HalJson',
            'installer\\V1\\Rest\\Licenses\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'installer\\V1\\Rest\\Accounts\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'installer\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'installer\\V1\\Rest\\Customers\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'installer\\V1\\Rest\\Licenses\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'installer\\V1\\Rest\\Accounts\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/json',
            ),
            'installer\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/json',
            ),
            'installer\\V1\\Rest\\Customers\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/json',
            ),
            'installer\\V1\\Rest\\Licenses\\Controller' => array(
                0 => 'application/vnd.installer.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'installer\\V1\\Rest\\Accounts\\AccountsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.accounts',
                'route_identifier_name' => 'accounts_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'installer\\V1\\Rest\\Accounts\\AccountsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.accounts',
                'route_identifier_name' => 'accounts_id',
                'is_collection' => true,
            ),
            'installer\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'installer\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
            'installer\\V1\\Rest\\Customers\\CustomersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.customers',
                'route_identifier_name' => 'customers_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'installer\\V1\\Rest\\Customers\\CustomersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.customers',
                'route_identifier_name' => 'customers_id',
                'is_collection' => true,
            ),
            'installer\\V1\\Rest\\Licenses\\LicensesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.licenses',
                'route_identifier_name' => 'licenses_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'installer\\V1\\Rest\\Licenses\\LicensesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'installer.rest.licenses',
                'route_identifier_name' => 'licenses_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'installer\\V1\\Rest\\Accounts\\AccountsResource' => array(
                'adapter_name' => 'adapter',
                'table_name' => 'accounts',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'installer\\V1\\Rest\\Accounts\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'installer\\V1\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'adapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'installer\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'installer\\V1\\Rest\\Customers\\CustomersResource' => array(
                'adapter_name' => 'adapter',
                'table_name' => 'customers',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'installer\\V1\\Rest\\Customers\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'installer\\V1\\Rest\\Licenses\\LicensesResource' => array(
                'adapter_name' => 'adapter',
                'table_name' => 'licenses',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'installer\\V1\\Rest\\Licenses\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'installer\\V1\\Rest\\Accounts\\Controller' => array(
            'input_filter' => 'installer\\V1\\Rest\\Accounts\\Validator',
        ),
        'installer\\V1\\Rest\\Users\\Controller' => array(
            'input_filter' => 'installer\\V1\\Rest\\Users\\Validator',
        ),
        'installer\\V1\\Rest\\Customers\\Controller' => array(
            'input_filter' => 'installer\\V1\\Rest\\Customers\\Validator',
        ),
        'installer\\V1\\Rest\\Licenses\\Controller' => array(
            'input_filter' => 'installer\\V1\\Rest\\Licenses\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'installer\\V1\\Rest\\Accounts\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'identificador con autoincrement',
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            1 => array(
                'name' => 'created_date',
                'required' => true,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\Date',
                        'options' => array(),
                    ),
                ),
                'description' => 'Date of the account creation',
            ),
            2 => array(
                'name' => 'id_user',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            3 => array(
                'name' => 'domain',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'installer\\V1\\Rest\\Users\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            1 => array(
                'name' => 'password',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'id_license',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'installer\\V1\\Rest\\Customers\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            1 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
        'installer\\V1\\Rest\\Licenses\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'allow_empty' => true,
                'continue_if_empty' => true,
            ),
            1 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
);
