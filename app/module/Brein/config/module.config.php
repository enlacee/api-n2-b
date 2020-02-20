<?php
return [
    'router' => [
        'routes' => [
            'brein.rest.admin-roles' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/admin_roles[/:admin_roles_id]',
                    'defaults' => [
                        'controller' => 'Brein\\V1\\Rest\\AdminRoles\\Controller',
                    ],
                ],
            ],
            'brein.rest.admin-users' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/admin_users[/:admin_users_id]',
                    'defaults' => [
                        'controller' => 'Brein\\V1\\Rest\\AdminUsers\\Controller',
                    ],
                ],
            ],
            'brein.rest.login' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/login[/:login_id]',
                    'defaults' => [
                        'controller' => 'Brein\\V1\\Rest\\Login\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'brein.rest.admin-roles',
            1 => 'brein.rest.admin-users',
            2 => 'brein.rest.login',
        ],
    ],
    'api-tools-rest' => [
        'Brein\\V1\\Rest\\AdminRoles\\Controller' => [
            'listener' => 'Brein\\V1\\Rest\\AdminRoles\\AdminRolesResource',
            'route_name' => 'brein.rest.admin-roles',
            'route_identifier_name' => 'admin_roles_id',
            'collection_name' => 'admin_roles',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Brein\V1\Rest\AdminRoles\AdminRolesEntity::class,
            'collection_class' => \Brein\V1\Rest\AdminRoles\AdminRolesCollection::class,
            'service_name' => 'admin_roles',
        ],
        'Brein\\V1\\Rest\\AdminUsers\\Controller' => [
            'listener' => \Brein\V1\Rest\AdminUsers\AdminUsersResource::class,
            'route_name' => 'brein.rest.admin-users',
            'route_identifier_name' => 'admin_users_id',
            'collection_name' => 'admin_users',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Brein\V1\Rest\AdminUsers\AdminUsersEntity::class,
            'collection_class' => \Brein\V1\Rest\AdminUsers\AdminUsersCollection::class,
            'service_name' => 'admin_users',
        ],
        'Brein\\V1\\Rest\\Login\\Controller' => [
            'listener' => \Brein\V1\Rest\Login\LoginResource::class,
            'route_name' => 'brein.rest.login',
            'route_identifier_name' => 'login_id',
            'collection_name' => 'login',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Brein\V1\Rest\Login\LoginEntity::class,
            'collection_class' => \Brein\V1\Rest\Login\LoginCollection::class,
            'service_name' => 'login',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Brein\\V1\\Rest\\AdminRoles\\Controller' => 'HalJson',
            'Brein\\V1\\Rest\\AdminUsers\\Controller' => 'HalJson',
            'Brein\\V1\\Rest\\Login\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Brein\\V1\\Rest\\AdminRoles\\Controller' => [
                0 => 'application/vnd.brein.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Brein\\V1\\Rest\\AdminUsers\\Controller' => [
                0 => 'application/vnd.brein.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Brein\\V1\\Rest\\Login\\Controller' => [
                0 => 'application/vnd.brein.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Brein\\V1\\Rest\\AdminRoles\\Controller' => [
                0 => 'application/vnd.brein.v1+json',
                1 => 'application/json',
            ],
            'Brein\\V1\\Rest\\AdminUsers\\Controller' => [
                0 => 'application/vnd.brein.v1+json',
                1 => 'application/json',
            ],
            'Brein\\V1\\Rest\\Login\\Controller' => [
                0 => 'application/vnd.brein.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Brein\V1\Rest\AdminRoles\AdminRolesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brein.rest.admin-roles',
                'route_identifier_name' => 'admin_roles_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Brein\V1\Rest\AdminRoles\AdminRolesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brein.rest.admin-roles',
                'route_identifier_name' => 'admin_roles_id',
                'is_collection' => true,
            ],
            \Brein\V1\Rest\AdminUsers\AdminUsersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brein.rest.admin-users',
                'route_identifier_name' => 'admin_users_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Brein\V1\Rest\AdminUsers\AdminUsersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brein.rest.admin-users',
                'route_identifier_name' => 'admin_users_id',
                'is_collection' => true,
            ],
            \Brein\V1\Rest\Login\LoginEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brein.rest.login',
                'route_identifier_name' => 'login_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Brein\V1\Rest\Login\LoginCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'brein.rest.login',
                'route_identifier_name' => 'login_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools' => [
        'db-connected' => [
            'Brein\\V1\\Rest\\AdminRoles\\AdminRolesResource' => [
                'adapter_name' => 'BrainDBAdapter',
                'table_name' => 'admin_roles',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Brein\\V1\\Rest\\AdminRoles\\Controller',
                'entity_identifier_name' => 'id',
            ],
            \Brein\V1\Rest\AdminUsers\AdminUsersResource::class => [
                'adapter_name' => 'BrainDBAdapter',
                'table_name' => 'admin_users',
                'hydrator_name' => \Laminas\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'Brein\\V1\\Rest\\AdminUsers\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'Brein\\V1\\Rest\\AdminUsers\\AdminUsersResource\\Table',
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Brein\\V1\\Rest\\AdminRoles\\Controller' => [
            'input_filter' => 'Brein\\V1\\Rest\\AdminRoles\\Validator',
        ],
        'Brein\\V1\\Rest\\AdminUsers\\Controller' => [
            'input_filter' => 'Brein\\V1\\Rest\\AdminUsers\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Brein\\V1\\Rest\\AdminRoles\\Validator' => [
            0 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'BrainDBAdapter',
                            'table' => 'admin_roles',
                            'field' => 'name',
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'description',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'resources',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '65535',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'active',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            4 => [
                'name' => 'created_at',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'updated_at',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'created_by',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            7 => [
                'name' => 'updated_by',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'Brein\\V1\\Rest\\AdminUsers\\Validator' => [
            0 => [
                'name' => 'admin_roles_id',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'BrainDBAdapter',
                            'table' => 'admin_roles',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'name',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'username',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'BrainDBAdapter',
                            'table' => 'admin_users',
                            'field' => 'username',
                        ],
                    ],
                    1 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '24',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'email',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '100',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'password',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'active',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            6 => [
                'name' => 'is_superuser',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            7 => [
                'name' => 'created_at',
                'required' => true,
                'filters' => [],
                'validators' => [],
            ],
            8 => [
                'name' => 'updated_at',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            9 => [
                'name' => 'created_by',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'BrainDBAdapter',
                            'table' => 'admin_users',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
            10 => [
                'name' => 'updated_by',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Laminas\Filter\Digits::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'Laminas\\ApiTools\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => [
                            'adapter' => 'BrainDBAdapter',
                            'table' => 'admin_users',
                            'field' => 'id',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'api-tools-mvc-auth' => [
        'authorization' => [
            'Brein\\V1\\Rest\\AdminRoles\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
            'Brein\\V1\\Rest\\AdminUsers\\Controller' => [
                'collection' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ],
            ],
            'Brein\\V1\\Rest\\Login\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
    'service_manager' => [
        'factories' => [
            \Brein\V1\Rest\Login\LoginResource::class => \Brein\V1\Rest\Login\LoginResourceFactory::class,
        ],
    ],
];
