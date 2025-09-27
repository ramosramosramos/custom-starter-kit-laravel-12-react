<?php

declare(strict_types=1);

return [
    'lastFullAnalysisTime' => 1758945225,
    'meta' => [
        'cacheVersion' => 'v12-linesToIgnore',
        'phpstanVersion' => '2.1.25',
        'metaExtensions' => [
        ],
        'phpVersion' => 80227,
        'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, featureToggles: {bleedingEdge: true, checkNonStringableDynamicAccess: true, checkParameterCastableToNumberFunctions: true, skipCheckGenericClasses: {_prevent_merging: true}, stricterFunctionMap: true, reportPreciseLineForUnusedFunctionParameter: true, checkPrintfParameterTypes: true, internalTag: true, newStaticInAbstractClassStaticMethod: true, checkExtensionsForComparisonOperators: true, reportTooWideBool: true, rawMessageInBaseline: true}, paths: [C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app, C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\bootstrap\\app.php, C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config, C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database, C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\public, C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes], level: max, excludePaths: {analyseAndScan: [database/migrations/2025_08_16_025403_create_permission_tables.php]}, tmpDir: C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\tmp\\phpstan}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: [{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\Extension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFindExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\BuilderModelFindExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @currentPhpVersionSimpleDirectParser, reflectionProvider: @reflectionProvider}}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem}, {class: Carbon\\PHPStan\\MacroExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}]}',
        'analysedPaths' => [
            0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app',
            1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\bootstrap\\app.php',
            2 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config',
            3 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database',
            4 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\public',
            5 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes',
        ],
        'scannedFiles' => [
        ],
        'composerLocks' => [
            'C:/Users/User/Herd/custom-starter-kit-laravel-12-react/composer.lock' => 'e7f927caadcf75f8a15ed377e5dc18df641bf7e2',
        ],
        'composerInstalled' => [
            'C:/Users/User/Herd/custom-starter-kit-laravel-12-react/vendor/composer/installed.php' => [
                'versions' => [
                    'amphp/amp' => [
                        'pretty_version' => 'v3.1.1',
                        'version' => '3.1.1.0',
                        'reference' => 'fa0ab33a6f47a82929c38d03ca47ebb71086a93f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/amp',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/byte-stream' => [
                        'pretty_version' => 'v2.1.2',
                        'version' => '2.1.2.0',
                        'reference' => '55a6bd071aec26fa2a3e002618c20c35e3df1b46',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/byte-stream',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/cache' => [
                        'pretty_version' => 'v2.0.1',
                        'version' => '2.0.1.0',
                        'reference' => '46912e387e6aa94933b61ea1ead9cf7540b7797c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/dns' => [
                        'pretty_version' => 'v2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => '78eb3db5fc69bf2fc0cb503c4fcba667bc223c71',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/dns',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/parallel' => [
                        'pretty_version' => 'v2.3.2',
                        'version' => '2.3.2.0',
                        'reference' => '321b45ae771d9c33a068186b24117e3cd1c48dce',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/parallel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/parser' => [
                        'pretty_version' => 'v1.1.1',
                        'version' => '1.1.1.0',
                        'reference' => '3cf1f8b32a0171d4b1bed93d25617637a77cded7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/pipeline' => [
                        'pretty_version' => 'v1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '7b52598c2e9105ebcddf247fc523161581930367',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/pipeline',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/process' => [
                        'pretty_version' => 'v2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => '52e08c09dec7511d5fbc1fb00d3e4e79fc77d58d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/serialization' => [
                        'pretty_version' => 'v1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => '693e77b2fb0b266c3c7d622317f881de44ae94a1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/serialization',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/socket' => [
                        'pretty_version' => 'v2.3.1',
                        'version' => '2.3.1.0',
                        'reference' => '58e0422221825b79681b72c50c47a930be7bf1e1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/socket',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'amphp/sync' => [
                        'pretty_version' => 'v2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '217097b785130d77cfcc58ff583cf26cd1770bf1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../amphp/sync',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'barryvdh/laravel-debugbar' => [
                        'pretty_version' => 'v3.16.0',
                        'version' => '3.16.0.0',
                        'reference' => 'f265cf5e38577d42311f1a90d619bcd3740bea23',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../barryvdh/laravel-debugbar',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'barryvdh/laravel-ide-helper' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '8d00250cba25728373e92c1d8dcebcbf64623d29',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../barryvdh/laravel-ide-helper',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'barryvdh/reflection-docblock' => [
                        'pretty_version' => 'v2.4.0',
                        'version' => '2.4.0.0',
                        'reference' => 'd103774cbe7e94ddee7e4870f97f727b43fe7201',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../barryvdh/reflection-docblock',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'brick/math' => [
                        'pretty_version' => '0.14.0',
                        'version' => '0.14.0.0',
                        'reference' => '113a8ee2656b882d4c3164fa31aa6e12cbb7aaa2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../brick/math',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'carbonphp/carbon-doctrine-types' => [
                        'pretty_version' => '3.2.0',
                        'version' => '3.2.0.0',
                        'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../carbonphp/carbon-doctrine-types',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'composer/class-map-generator' => [
                        'pretty_version' => '1.6.2',
                        'version' => '1.6.2.0',
                        'reference' => 'ba9f089655d4cdd64e762a6044f411ccdaec0076',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/./class-map-generator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'composer/pcre' => [
                        'pretty_version' => '3.3.2',
                        'version' => '3.3.2.0',
                        'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/./pcre',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'cordoval/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'davedevelopment/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'daverandom/libdns' => [
                        'pretty_version' => 'v2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => 'b84c94e8fe6b7ee4aecfe121bfe3b6177d303c8a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../daverandom/libdns',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dflydev/dot-access-data' => [
                        'pretty_version' => 'v3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../dflydev/dot-access-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/deprecations' => [
                        'pretty_version' => '1.1.5',
                        'version' => '1.1.5.0',
                        'reference' => '459c2f5dd3d6a4633d3b5f46ee2b1c40f57d3f38',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../doctrine/deprecations',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/inflector' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../doctrine/inflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'doctrine/lexer' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../doctrine/lexer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'dragonmantank/cron-expression' => [
                        'pretty_version' => 'v3.4.0',
                        'version' => '3.4.0.0',
                        'reference' => '8c784d071debd117328803d86b2097615b457500',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../dragonmantank/cron-expression',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'driftingly/rector-laravel' => [
                        'pretty_version' => '2.0.7',
                        'version' => '2.0.7.0',
                        'reference' => '625dc02cee08d47ecf0ac86de2f02a55026cf34e',
                        'type' => 'rector-extension',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../driftingly/rector-laravel',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'egulias/email-validator' => [
                        'pretty_version' => '4.0.4',
                        'version' => '4.0.4.0',
                        'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../egulias/email-validator',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'fakerphp/faker' => [
                        'pretty_version' => 'v1.24.1',
                        'version' => '1.24.1.0',
                        'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../fakerphp/faker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'filp/whoops' => [
                        'pretty_version' => '2.18.4',
                        'version' => '2.18.4.0',
                        'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../filp/whoops',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'fruitcake/php-cors' => [
                        'pretty_version' => 'v1.3.0',
                        'version' => '1.3.0.0',
                        'reference' => '3d158f36e7875e2f040f37bc0573956240a5a38b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../fruitcake/php-cors',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'graham-campbell/result-type' => [
                        'pretty_version' => 'v1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../graham-campbell/result-type',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/guzzle' => [
                        'pretty_version' => '7.10.0',
                        'version' => '7.10.0.0',
                        'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../guzzlehttp/guzzle',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/promises' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../guzzlehttp/promises',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/psr7' => [
                        'pretty_version' => '2.8.0',
                        'version' => '2.8.0.0',
                        'reference' => '21dc724a0583619cd1652f673303492272778051',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../guzzlehttp/psr7',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'guzzlehttp/uri-template' => [
                        'pretty_version' => 'v1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../guzzlehttp/uri-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'hamcrest/hamcrest-php' => [
                        'pretty_version' => 'v2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../hamcrest/hamcrest-php',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'iamcal/sql-parser' => [
                        'pretty_version' => 'v0.6',
                        'version' => '0.6.0.0',
                        'reference' => '947083e2dca211a6f12fb1beb67a01e387de9b62',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../iamcal/sql-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'illuminate/auth' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/broadcasting' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/bus' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/cache' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/collections' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/concurrency' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/conditionable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/config' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/console' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/container' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/contracts' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/cookie' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/database' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/encryption' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/events' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/filesystem' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/hashing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/http' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/json-schema' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/log' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/macroable' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/mail' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/notifications' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/pagination' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/pipeline' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/process' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/queue' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/redis' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/routing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/session' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/support' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/testing' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/translation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/validation' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'illuminate/view' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => 'v12.28.1',
                        ],
                    ],
                    'inertiajs/inertia-laravel' => [
                        'pretty_version' => 'v2.0.6',
                        'version' => '2.0.6.0',
                        'reference' => '6d0afc3237c370036de4a703927b17a4e7b83298',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../inertiajs/inertia-laravel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'kelunik/certificate' => [
                        'pretty_version' => 'v1.1.3',
                        'version' => '1.1.3.0',
                        'reference' => '7e00d498c264d5eb4f78c69f41c8bd6719c0199e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../kelunik/certificate',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'kentjerone/laravel-chain-rule' => [
                        'pretty_version' => 'v1.2.5',
                        'version' => '1.2.5.0',
                        'reference' => '5c75e166fd8bfa2830e4ff6befe136ff2aa1a242',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../kentjerone/laravel-chain-rule',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'kodova/hamcrest-php' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'larastan/larastan' => [
                        'pretty_version' => 'v3.7.1',
                        'version' => '3.7.1.0',
                        'reference' => '2e653fd19585a825e283b42f38378b21ae481cc7',
                        'type' => 'phpstan-extension',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../larastan/larastan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/framework' => [
                        'pretty_version' => 'v12.28.1',
                        'version' => '12.28.1.0',
                        'reference' => '868c1f2d3dba4df6d21e3a8d818479f094cfd942',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/framework',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/pail' => [
                        'pretty_version' => 'v1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '8cc3d575c1f0e57eeb923f366a37528c50d2385a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/pail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/pint' => [
                        'pretty_version' => 'v1.24.0',
                        'version' => '1.24.0.0',
                        'reference' => '0345f3b05f136801af8c339f9d16ef29e6b4df8a',
                        'type' => 'project',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/pint',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/prompts' => [
                        'pretty_version' => 'v0.3.6',
                        'version' => '0.3.6.0',
                        'reference' => '86a8b692e8661d0fb308cec64f3d176821323077',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/prompts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/sail' => [
                        'pretty_version' => 'v1.45.0',
                        'version' => '1.45.0.0',
                        'reference' => '019a2933ff4a9199f098d4259713f9bc266a874e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/sail',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'laravel/serializable-closure' => [
                        'pretty_version' => 'v2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => 'b352cf0534aa1ae6b4d825d1e762e35d43f8a841',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/serializable-closure',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/tinker' => [
                        'pretty_version' => 'v2.10.1',
                        'version' => '2.10.1.0',
                        'reference' => '22177cc71807d38f2810c6204d8f7183d88a57d3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/tinker',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'laravel/wayfinder' => [
                        'pretty_version' => 'v0.1.12',
                        'version' => '0.1.12.0',
                        'reference' => '08285225df7f8a094789ad8f384ac6bad6712ff6',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../laravel/wayfinder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/commonmark' => [
                        'pretty_version' => '2.7.1',
                        'version' => '2.7.1.0',
                        'reference' => '10732241927d3971d28e7ea7b5712721fa2296ca',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/commonmark',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/config' => [
                        'pretty_version' => 'v1.2.0',
                        'version' => '1.2.0.0',
                        'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/config',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '2203e3151755d874bb2943649dae1eb8533ac93e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/flysystem',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/flysystem-local' => [
                        'pretty_version' => '3.30.0',
                        'version' => '3.30.0.0',
                        'reference' => '6691915f77c7fb69adfb87dcd550052dc184ee10',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/flysystem-local',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/mime-type-detection' => [
                        'pretty_version' => '1.16.0',
                        'version' => '1.16.0.0',
                        'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/mime-type-detection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri' => [
                        'pretty_version' => '7.5.1',
                        'version' => '7.5.1.0',
                        'reference' => '81fb5145d2644324614cc532b28efd0215bda430',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/uri',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'league/uri-interfaces' => [
                        'pretty_version' => '7.5.0',
                        'version' => '7.5.0.0',
                        'reference' => '08cfc6c4f3d811584fb09c37e2849e6a7f9b0742',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../league/uri-interfaces',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lorisleiva/laravel-actions' => [
                        'pretty_version' => 'v2.9.1',
                        'version' => '2.9.1.0',
                        'reference' => '11c2531366ca8bd5efcd0afc9e8047e7999926ff',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../lorisleiva/laravel-actions',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'lorisleiva/lody' => [
                        'pretty_version' => 'v0.6.0',
                        'version' => '0.6.0.0',
                        'reference' => '6bada710ebc75f06fdf62db26327be1592c4f014',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../lorisleiva/lody',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'maximebf/debugbar' => [
                        'dev_requirement' => true,
                        'replaced' => [
                            0 => 'v2.2.4',
                        ],
                    ],
                    'mockery/mockery' => [
                        'pretty_version' => '1.6.12',
                        'version' => '1.6.12.0',
                        'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../mockery/mockery',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'monolog/monolog' => [
                        'pretty_version' => '3.9.0',
                        'version' => '3.9.0.0',
                        'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../monolog/monolog',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'mtdowling/cron-expression' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '^1.0',
                        ],
                    ],
                    'myclabs/deep-copy' => [
                        'pretty_version' => '1.13.4',
                        'version' => '1.13.4.0',
                        'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../myclabs/deep-copy',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nesbot/carbon' => [
                        'pretty_version' => '3.10.3',
                        'version' => '3.10.3.0',
                        'reference' => '8e3643dcd149ae0fe1d2ff4f2c8e4bbfad7c165f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../nesbot/carbon',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/schema' => [
                        'pretty_version' => 'v1.3.2',
                        'version' => '1.3.2.0',
                        'reference' => 'da801d52f0354f70a638673c4a0f04e16529431d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../nette/schema',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nette/utils' => [
                        'pretty_version' => 'v4.0.8',
                        'version' => '4.0.8.0',
                        'reference' => 'c930ca4e3cf4f17dcfb03037703679d2396d2ede',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../nette/utils',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nikic/php-parser' => [
                        'pretty_version' => 'v5.6.1',
                        'version' => '5.6.1.0',
                        'reference' => 'f103601b29efebd7ff4a1ca7b3eeea9e3336a2a2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../nikic/php-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'nunomaduro/collision' => [
                        'pretty_version' => 'v8.8.2',
                        'version' => '8.8.2.0',
                        'reference' => '60207965f9b7b7a4ce15a0f75d57f9dadb105bdb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../nunomaduro/collision',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'nunomaduro/termwind' => [
                        'pretty_version' => 'v2.3.1',
                        'version' => '2.3.1.0',
                        'reference' => 'dfa08f390e509967a15c22493dc0bac5733d9123',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../nunomaduro/termwind',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'opcodesio/log-viewer' => [
                        'pretty_version' => 'v3.19.0',
                        'version' => '3.19.0.0',
                        'reference' => '503c545210f92b65a516de63d9154423271253f1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../opcodesio/log-viewer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'opcodesio/mail-parser' => [
                        'pretty_version' => 'v0.1.6',
                        'version' => '0.1.6.0',
                        'reference' => '639ef31cbd146a63416283e75afce152e13233ea',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../opcodesio/mail-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phar-io/manifest' => [
                        'pretty_version' => '2.0.4',
                        'version' => '2.0.4.0',
                        'reference' => '54750ef60c58e43759730615a392c31c80e23176',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phar-io/manifest',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phar-io/version' => [
                        'pretty_version' => '3.2.1',
                        'version' => '3.2.1.0',
                        'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phar-io/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'php-debugbar/php-debugbar' => [
                        'pretty_version' => 'v2.2.4',
                        'version' => '2.2.4.0',
                        'reference' => '3146d04671f51f69ffec2a4207ac3bdcf13a9f35',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../php-debugbar/php-debugbar',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpdocumentor/reflection' => [
                        'pretty_version' => '6.3.0',
                        'version' => '6.3.0.0',
                        'reference' => 'd91b3270832785602adcc24ae2d0974ba99a8ff8',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpdocumentor/reflection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpdocumentor/reflection-common' => [
                        'pretty_version' => '2.2.0',
                        'version' => '2.2.0.0',
                        'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpdocumentor/reflection-common',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpdocumentor/reflection-docblock' => [
                        'pretty_version' => '5.6.3',
                        'version' => '5.6.3.0',
                        'reference' => '94f8051919d1b0369a6bcc7931d679a511c03fe9',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpdocumentor/reflection-docblock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpdocumentor/type-resolver' => [
                        'pretty_version' => '1.10.0',
                        'version' => '1.10.0.0',
                        'reference' => '679e3ce485b99e84c775d28e2e96fade9a7fb50a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpdocumentor/type-resolver',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpoption/phpoption' => [
                        'pretty_version' => '1.9.4',
                        'version' => '1.9.4.0',
                        'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpoption/phpoption',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpdoc-parser' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '1e0cd5370df5dd2e556a36b9c62f62e555870495',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpstan/phpdoc-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'phpstan/phpstan' => [
                        'pretty_version' => '2.1.25',
                        'version' => '2.1.25.0',
                        'reference' => '4087d28bd252895874e174d65e26b2c202ed893a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpstan/phpstan',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-code-coverage' => [
                        'pretty_version' => '11.0.11',
                        'version' => '11.0.11.0',
                        'reference' => '4f7722aa9a7b76aa775e2d9d4e95d1ea16eeeef4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpunit/php-code-coverage',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-file-iterator' => [
                        'pretty_version' => '5.1.0',
                        'version' => '5.1.0.0',
                        'reference' => '118cfaaa8bc5aef3287bf315b6060b1174754af6',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpunit/php-file-iterator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-invoker' => [
                        'pretty_version' => '5.0.1',
                        'version' => '5.0.1.0',
                        'reference' => 'c1ca3814734c07492b3d4c5f794f4b0995333da2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpunit/php-invoker',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-text-template' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '3e0404dc6b300e6bf56415467ebcb3fe4f33e964',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpunit/php-text-template',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/php-timer' => [
                        'pretty_version' => '7.0.1',
                        'version' => '7.0.1.0',
                        'reference' => '3b415def83fbcb41f991d9ebf16ae4ad8b7837b3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpunit/php-timer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'phpunit/phpunit' => [
                        'pretty_version' => '11.5.39',
                        'version' => '11.5.39.0',
                        'reference' => 'ad5597f79d8489d2870073ac0bc0dd0ad1fa9931',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../phpunit/phpunit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'psr/clock' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/clock-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/container' => [
                        'pretty_version' => '2.0.2',
                        'version' => '2.0.2.0',
                        'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/container',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/container-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.1|2.0',
                        ],
                    ],
                    'psr/event-dispatcher' => [
                        'pretty_version' => '1.0.0',
                        'version' => '1.0.0.0',
                        'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-client' => [
                        'pretty_version' => '1.0.3',
                        'version' => '1.0.3.0',
                        'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/http-client',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-client-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-factory' => [
                        'pretty_version' => '1.1.0',
                        'version' => '1.1.0.0',
                        'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/http-factory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-factory-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/http-message' => [
                        'pretty_version' => '2.0',
                        'version' => '2.0.0.0',
                        'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/http-message',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/http-message-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0',
                        ],
                    ],
                    'psr/log' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/log',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/log-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                            1 => '3.0.0',
                        ],
                    ],
                    'psr/simple-cache' => [
                        'pretty_version' => '3.0.0',
                        'version' => '3.0.0.0',
                        'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psr/simple-cache',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'psr/simple-cache-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '1.0|2.0|3.0',
                        ],
                    ],
                    'psy/psysh' => [
                        'pretty_version' => 'v0.12.10',
                        'version' => '0.12.10.0',
                        'reference' => '6e80abe6f2257121f1eb9a4c55bf29d921025b22',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../psy/psysh',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ralouphie/getallheaders' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '120b605dfeb996808c31b6477290a714d356e822',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../ralouphie/getallheaders',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/collection' => [
                        'pretty_version' => '2.1.1',
                        'version' => '2.1.1.0',
                        'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../ramsey/collection',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'ramsey/uuid' => [
                        'pretty_version' => '4.9.1',
                        'version' => '4.9.1.0',
                        'reference' => '81f941f6f729b1e3ceea61d9d014f8b6c6800440',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../ramsey/uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rector/rector' => [
                        'pretty_version' => '2.1.7',
                        'version' => '2.1.7.0',
                        'reference' => 'c34cc07c4698f007a20dc5c99ff820089ae413ce',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../rector/rector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'revolt/event-loop' => [
                        'pretty_version' => 'v1.0.7',
                        'version' => '1.0.7.0',
                        'reference' => '09bf1bf7f7f574453efe43044b06fafe12216eb3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../revolt/event-loop',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'rhumsaa/uuid' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '4.9.1',
                        ],
                    ],
                    'sebastian/cli-parser' => [
                        'pretty_version' => '3.0.2',
                        'version' => '3.0.2.0',
                        'reference' => '15c5dd40dc4f38794d383bb95465193f5e0ae180',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/cli-parser',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit' => [
                        'pretty_version' => '3.0.3',
                        'version' => '3.0.3.0',
                        'reference' => '54391c61e4af8078e5b276ab082b6d3c54c9ad64',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/code-unit',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/code-unit-reverse-lookup' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '183a9b2632194febd219bb9246eee421dad8d45e',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/code-unit-reverse-lookup',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/comparator' => [
                        'pretty_version' => '6.3.2',
                        'version' => '6.3.2.0',
                        'reference' => '85c77556683e6eee4323e4c5468641ca0237e2e8',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/comparator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/complexity' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => 'ee41d384ab1906c68852636b6de493846e13e5a0',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/complexity',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/diff' => [
                        'pretty_version' => '6.0.2',
                        'version' => '6.0.2.0',
                        'reference' => 'b4ccd857127db5d41a5b676f24b51371d76d8544',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/diff',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/environment' => [
                        'pretty_version' => '7.2.1',
                        'version' => '7.2.1.0',
                        'reference' => 'a5c75038693ad2e8d4b6c15ba2403532647830c4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/environment',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/exporter' => [
                        'pretty_version' => '6.3.0',
                        'version' => '6.3.0.0',
                        'reference' => '3473f61172093b2da7de1fb5782e1f24cc036dc3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/exporter',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/global-state' => [
                        'pretty_version' => '7.0.2',
                        'version' => '7.0.2.0',
                        'reference' => '3be331570a721f9a4b5917f4209773de17f747d7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/global-state',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/lines-of-code' => [
                        'pretty_version' => '3.0.1',
                        'version' => '3.0.1.0',
                        'reference' => 'd36ad0d782e5756913e42ad87cb2890f4ffe467a',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/lines-of-code',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-enumerator' => [
                        'pretty_version' => '6.0.1',
                        'version' => '6.0.1.0',
                        'reference' => 'f5b498e631a74204185071eb41f33f38d64608aa',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/object-enumerator',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/object-reflector' => [
                        'pretty_version' => '4.0.1',
                        'version' => '4.0.1.0',
                        'reference' => '6e1a43b411b2ad34146dee7524cb13a068bb35f9',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/object-reflector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/recursion-context' => [
                        'pretty_version' => '6.0.3',
                        'version' => '6.0.3.0',
                        'reference' => 'f6458abbf32a6c8174f8f26261475dc133b3d9dc',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/recursion-context',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/type' => [
                        'pretty_version' => '5.1.3',
                        'version' => '5.1.3.0',
                        'reference' => 'f77d2d4e78738c98d9a68d2596fe5e8fa380f449',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/type',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'sebastian/version' => [
                        'pretty_version' => '5.0.2',
                        'version' => '5.0.2.0',
                        'reference' => 'c687e3387b99f5b03b6caa64c74b63e2936ff874',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../sebastian/version',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'spatie/db-dumper' => [
                        'pretty_version' => '3.8.0',
                        'version' => '3.8.0.0',
                        'reference' => '91e1fd4dc000aefc9753cda2da37069fc996baee',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/db-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-backup' => [
                        'pretty_version' => '9.3.4',
                        'version' => '9.3.4.0',
                        'reference' => '707e27eb1746296ac7e111179ec5da842f64e235',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/laravel-backup',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-data' => [
                        'pretty_version' => '4.17.1',
                        'version' => '4.17.1.0',
                        'reference' => '6ec15bb6798128f01aecb67dcd18a937251a27a5',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/laravel-data',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-package-tools' => [
                        'pretty_version' => '1.92.7',
                        'version' => '1.92.7.0',
                        'reference' => 'f09a799850b1ed765103a4f0b4355006360c49a5',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/laravel-package-tools',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-permission' => [
                        'pretty_version' => '6.21.0',
                        'version' => '6.21.0.0',
                        'reference' => '6a118e8855dfffcd90403aab77bbf35a03db51b3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/laravel-permission',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/laravel-signal-aware-command' => [
                        'pretty_version' => '2.1.0',
                        'version' => '2.1.0.0',
                        'reference' => '8e8a226ed7fb45302294878ef339e75ffa9a878d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/laravel-signal-aware-command',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/once' => [
                        'dev_requirement' => false,
                        'replaced' => [
                            0 => '*',
                        ],
                    ],
                    'spatie/php-structure-discoverer' => [
                        'pretty_version' => '2.3.1',
                        'version' => '2.3.1.0',
                        'reference' => '42f4d731d3dd4b3b85732e05a8c1928fcfa2f4bc',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/php-structure-discoverer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'spatie/temporary-directory' => [
                        'pretty_version' => '2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '580eddfe9a0a41a902cac6eeb8f066b42e65a32b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../spatie/temporary-directory',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'staabm/side-effects-detector' => [
                        'pretty_version' => '1.0.5',
                        'version' => '1.0.5.0',
                        'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../staabm/side-effects-detector',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'symfony/clock' => [
                        'pretty_version' => 'v7.3.0',
                        'version' => '7.3.0.0',
                        'reference' => 'b81435fbd6648ea425d1ee96a2d8e68f4ceacd24',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/clock',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/console' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'cb0102a1c5ac3807cf3fdf8bea96007df7fdbea7',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/console',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/css-selector' => [
                        'pretty_version' => 'v7.3.0',
                        'version' => '7.3.0.0',
                        'reference' => '601a5ce9aaad7bf10797e3663faefce9e26c24e2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/css-selector',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/deprecation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/deprecation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/error-handler' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => '0b31a944fcd8759ae294da4d2808cbc53aebd0c3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/error-handler',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'b7dc69e71de420ac04bc9ab830cf3ffebba48191',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/event-dispatcher',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/event-dispatcher-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/event-dispatcher-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.0|3.0',
                        ],
                    ],
                    'symfony/finder' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => '2a6614966ba1074fa93dae0bc804227422df4dfe',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/finder',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-foundation' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '7475561ec27020196c49bb7c4f178d33d7d3dc00',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/http-foundation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/http-kernel' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '72c304de37e1a1cec6d5d12b81187ebd4850a17b',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/http-kernel',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mailer' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'a32f3f45f1990db8c4341d5122a7d3a381c7e575',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/mailer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/mime' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => 'e0a0f859148daf1edf6c60b398eb40bfc96697d1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/mime',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-ctype' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-ctype',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-grapheme' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-intl-grapheme',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-idn' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-intl-idn',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-intl-normalizer' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-intl-normalizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-mbstring' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-mbstring',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php80' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-php80',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php83' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-php83',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php84' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-php84',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-php85' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-php85',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/polyfill-uuid' => [
                        'pretty_version' => 'v1.33.0',
                        'version' => '1.33.0.0',
                        'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/polyfill-uuid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/process' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '32241012d521e2e8a9d713adb0812bb773b907f1',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/process',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/routing' => [
                        'pretty_version' => 'v7.3.2',
                        'version' => '7.3.2.0',
                        'reference' => '7614b8ca5fa89b9cd233e21b627bfc5774f586e4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/routing',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/service-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'f021b05a130d35510bd6b25fe9053c2a8a15d5d4',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/service-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/string' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '17a426cce5fd1f0901fefa9b2a490d0038fd3c9c',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/string',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'e0837b4cbcef63c754d89a4806575cada743a38d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/translation',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-contracts' => [
                        'pretty_version' => 'v3.6.0',
                        'version' => '3.6.0.0',
                        'reference' => 'df210c7a2573f1913b2d17cc95f90f53a73d8f7d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/translation-contracts',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/translation-implementation' => [
                        'dev_requirement' => false,
                        'provided' => [
                            0 => '2.3|3.0',
                        ],
                    ],
                    'symfony/uid' => [
                        'pretty_version' => 'v7.3.1',
                        'version' => '7.3.1.0',
                        'reference' => 'a69f69f3159b852651a6bf45a9fdd149520525bb',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/uid',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/var-dumper' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => '34d8d4c4b9597347306d1ec8eb4e1319b1e6986f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/var-dumper',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'symfony/yaml' => [
                        'pretty_version' => 'v7.3.3',
                        'version' => '7.3.3.0',
                        'reference' => 'd4f4a66866fe2451f61296924767280ab5732d9d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../symfony/yaml',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'theseer/tokenizer' => [
                        'pretty_version' => '1.2.3',
                        'version' => '1.2.3.0',
                        'reference' => '737eda637ed5e28c3413cb1ebe8bb52cbf1ca7a2',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../theseer/tokenizer',
                        'aliases' => [
                        ],
                        'dev_requirement' => true,
                    ],
                    'tightenco/ziggy' => [
                        'pretty_version' => 'v2.6.0',
                        'version' => '2.6.0.0',
                        'reference' => 'cccc6035c109daab03a33926b3a8499bedbed01f',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../tightenco/ziggy',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'tijsverkoyen/css-to-inline-styles' => [
                        'pretty_version' => 'v2.3.0',
                        'version' => '2.3.0.0',
                        'reference' => '0d72ac1c00084279c1816675284073c5a337c20d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../tijsverkoyen/css-to-inline-styles',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'vlucas/phpdotenv' => [
                        'pretty_version' => 'v5.6.2',
                        'version' => '5.6.2.0',
                        'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../vlucas/phpdotenv',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'voku/portable-ascii' => [
                        'pretty_version' => '2.0.3',
                        'version' => '2.0.3.0',
                        'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../voku/portable-ascii',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                    'webmozart/assert' => [
                        'pretty_version' => '1.11.0',
                        'version' => '1.11.0.0',
                        'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
                        'type' => 'library',
                        'install_path' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\composer/../webmozart/assert',
                        'aliases' => [
                        ],
                        'dev_requirement' => false,
                    ],
                ],
            ],
        ],
        'executedFilesHashes' => [
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\larastan\\larastan\\bootstrap.php' => '28392079817075879815f110287690e80398fe5e',
            'phar://C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
            'phar://C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
            'phar://C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
            'phar://C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
        ],
        'phpExtensions' => [
            0 => 'Core',
            1 => 'FFI',
            2 => 'PDO',
            3 => 'Phar',
            4 => 'Reflection',
            5 => 'SPL',
            6 => 'SimpleXML',
            7 => 'Zend OPcache',
            8 => 'bcmath',
            9 => 'bz2',
            10 => 'calendar',
            11 => 'ctype',
            12 => 'curl',
            13 => 'date',
            14 => 'dom',
            15 => 'exif',
            16 => 'fileinfo',
            17 => 'filter',
            18 => 'gd',
            19 => 'gmp',
            20 => 'hash',
            21 => 'herd',
            22 => 'iconv',
            23 => 'intl',
            24 => 'json',
            25 => 'libxml',
            26 => 'mbstring',
            27 => 'mongodb',
            28 => 'mysqli',
            29 => 'mysqlnd',
            30 => 'openssl',
            31 => 'pcre',
            32 => 'pdo_mysql',
            33 => 'pdo_pgsql',
            34 => 'pdo_sqlite',
            35 => 'pgsql',
            36 => 'random',
            37 => 'readline',
            38 => 'redis',
            39 => 'session',
            40 => 'shmop',
            41 => 'soap',
            42 => 'sockets',
            43 => 'sodium',
            44 => 'sqlite3',
            45 => 'standard',
            46 => 'tokenizer',
            47 => 'xml',
            48 => 'xmlreader',
            49 => 'xmlwriter',
            50 => 'zip',
            51 => 'zlib',
        ],
        'stubFiles' => [
        ],
        'level' => 'max',
    ],
    'projectExtensionFiles' => [
    ],
    'errorsCallback' => static function (): array {
        return [
        ];
    },
    'locallyIgnoredErrorsCallback' => static function (): array {
        return [
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php' => [
                0 => PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $directory of method Illuminate\\Filesystem\\FilesystemAdapter::files() expects string|null, mixed given.',
                    'file' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'line' => 22,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 22,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                1 => PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $path of method Illuminate\\Filesystem\\FilesystemAdapter::size() expects string, mixed given.',
                    'file' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'line' => 28,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 28,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                2 => PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #1 $path of method Illuminate\\Filesystem\\FilesystemAdapter::lastModified() expects string, mixed given.',
                    'file' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'line' => 30,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 30,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                3 => PHPStan\Analyser\Error::__set_state([
                    'message' => 'Binary operation "." between mixed and \'/\' results in an error.',
                    'file' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'line' => 67,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 67,
                    'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Concat',
                    'identifier' => 'binaryOp.invalid',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
                4 => PHPStan\Analyser\Error::__set_state([
                    'message' => 'Parameter #2 $name of method Illuminate\\Contracts\\Routing\\ResponseFactory::download() expects string|null, Illuminate\\Support\\Stringable given.',
                    'file' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'line' => 72,
                    'canBeIgnored' => true,
                    'filePath' => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                    'traitFilePath' => null,
                    'tip' => null,
                    'nodeLine' => 72,
                    'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
                    'identifier' => 'argument.type',
                    'metadata' => [
                    ],
                    'fixedErrorDiff' => null,
                ]),
            ],
        ];
    },
    'linesToIgnore' => [
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php' => [
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php' => [
                22 => null,
                28 => null,
                30 => null,
                67 => null,
                72 => null,
            ],
        ],
    ],
    'unmatchedLineIgnores' => [
    ],
    'collectedDataCallback' => static function (): array {
        return [
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Actions\\User\\UpdateUserPasswordAction.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'update',
                        2 => 20,
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Lorisleiva\\Actions\\Concerns\\AsAction',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Data\\UserData.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'App\\Data\\UserData',
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\ConfirmablePasswordController.php' => [
                'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => [
                    0 => [
                        0 => 'auth.password',
                        1 => 36,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'throw_unless',
                        1 => 32,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\NewPasswordController.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'event',
                        1 => 66,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'save',
                        2 => 61,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php' => [
                'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => [
                    0 => [
                        0 => 'A reset link will be sent if the account exists.',
                        1 => 41,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Password',
                        1 => 'sendResetLink',
                        2 => 37,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'event',
                        1 => 54,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 19,
                    ],
                    1 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 40,
                    ],
                    2 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 49,
                    ],
                    3 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 64,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'App\\Jobs\\Backup\\GenerateDatabaseBackup',
                        1 => 'dispatch',
                        2 => 41,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Controller.php' => [
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'App\\Actions\\User\\UpdateUserPasswordAction',
                        1 => 'run',
                        2 => 42,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'save',
                        2 => 53,
                    ],
                    1 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'delete',
                        2 => 70,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 24,
                    ],
                    1 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 33,
                    ],
                    2 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 43,
                    ],
                    3 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 66,
                    ],
                    4 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 77,
                    ],
                    5 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'update',
                        2 => 86,
                    ],
                    6 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'save',
                        2 => 91,
                    ],
                    7 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 100,
                    ],
                    8 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 110,
                    ],
                    9 => [
                        0 => [
                            0 => 'App\\Http\\Controllers\\Controller',
                        ],
                        1 => 'authorize',
                        2 => 126,
                    ],
                    10 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Model',
                        ],
                        1 => 'delete',
                        2 => 127,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleAppearance.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\View',
                        1 => 'share',
                        2 => 21,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php' => [
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'App\\Traits\\AuthUserTrait',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Auth\\LoginRequest.php' => [
                'Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector' => [
                    0 => [
                        0 => 'auth.failed',
                        1 => 47,
                    ],
                    1 => [
                        0 => 'auth.throttle',
                        1 => 70,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
                        1 => 'authorize',
                        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
                    ],
                    1 => [
                        0 => 'App\\Http\\Requests\\Auth\\LoginRequest',
                        1 => 'rules',
                        2 => 'App\\Http\\Requests\\Auth\\LoginRequest',
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'event',
                        1 => 65,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\RateLimiter',
                        1 => 'hit',
                        2 => 44,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\ChainRule',
                        1 => 'make',
                        2 => 'App\\Http\\Rules\\ChainRule',
                    ],
                    1 => [
                        0 => 'App\\Http\\Rules\\ChainRule',
                        1 => 'toArray',
                        2 => 'App\\Http\\Rules\\ChainRule',
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'throw_unless',
                        1 => 463,
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                    ],
                    1 => [
                        0 => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\CommonArrayRule.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'shortNullableString',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    1 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'shortRequiredString',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    2 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'shortNullableNumeric',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    3 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'shortRequiredNumeric',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    4 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'longNullableString',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    5 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'longRequiredString',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    6 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'requiredBoolean',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    7 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'nullableBoolean',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    8 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'requiredDate',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    9 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'nullableDate',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    10 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'requiredURL',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    11 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'nullableURL',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    12 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'requiredCaptcha',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    13 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'nullableCaptcha',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    14 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'requiredImage',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    15 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'nullableImage',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                    16 => [
                        0 => 'App\\Http\\Rules\\CommonArrayRule',
                        1 => 'requiredYearRange',
                        2 => 'App\\Http\\Rules\\CommonArrayRule',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\CommonRule.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\CommonRule',
                        1 => 'phpPhonenumber',
                        2 => 'App\\Http\\Rules\\CommonRule',
                    ],
                    1 => [
                        0 => 'App\\Http\\Rules\\CommonRule',
                        1 => 'preventDigit',
                        2 => 'App\\Http\\Rules\\CommonRule',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\Concerns\\HasParameterRule.php' => [
                'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                        1 => 9,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\Concerns\\HasSimpleRule.php' => [
                'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                        1 => 7,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\UserRule.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'email',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                    1 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'username',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                    2 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'role',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                    3 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'gender',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                    4 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'nullableGender',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                    5 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'birthdate',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                    6 => [
                        0 => 'App\\Http\\Rules\\UserRule',
                        1 => 'nullableBirthdate',
                        2 => 'App\\Http\\Rules\\UserRule',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Jobs\\Backup\\GenerateDatabaseBackup.php' => [
                'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => [
                    0 => 'App\\Jobs\\Backup\\GenerateDatabaseBackup',
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Foundation\\Console\\Kernel',
                        1 => 'call',
                        2 => 28,
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Models\\User.php' => [
                'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => [
                    0 => [
                        0 => 'App\\Models\\User',
                        1 => 'casts',
                        2 => 'App\\Models\\User',
                    ],
                ],
                'PHPStan\\Rules\\Traits\\TraitUseCollector' => [
                    0 => [
                        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                        1 => 'Spatie\\Permission\\Traits\\HasRoles',
                        2 => 'Illuminate\\Notifications\\Notifiable',
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Providers\\AppServiceProvider.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Gate',
                        1 => 'define',
                        2 => 34,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\Vite',
                        1 => 'usePrefetchStrategy',
                        2 => 76,
                    ],
                    2 => [
                        0 => 'Illuminate\\Support\\Facades\\Gate',
                        1 => 'define',
                        2 => 83,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Traits\\AuthUserTrait.php' => [
                'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => [
                    0 => [
                        0 => 'App\\Traits\\AuthUserTrait',
                        1 => 12,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => [
                    0 => [
                        0 => [
                            0 => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                        ],
                        1 => 'create',
                        2 => 24,
                    ],
                ],
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Database\\Eloquent\\Builder',
                        1 => 'firstOrCreate',
                        2 => 30,
                    ],
                    1 => [
                        0 => 'Illuminate\\Database\\Eloquent\\Builder',
                        1 => 'firstOrCreate',
                        2 => 72,
                    ],
                    2 => [
                        0 => 'Illuminate\\Database\\Eloquent\\Builder',
                        1 => 'firstOrCreate',
                        2 => 77,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\public\\index.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => [
                    0 => [
                        0 => 'define',
                        1 => 8,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Route',
                        1 => 'post',
                        2 => 19,
                    ],
                    1 => [
                        0 => 'Illuminate\\Support\\Facades\\Route',
                        1 => 'post',
                        2 => 24,
                    ],
                ],
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\settings.php' => [
                'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => [
                    0 => [
                        0 => 'Illuminate\\Support\\Facades\\Route',
                        1 => 'redirect',
                        2 => 11,
                    ],
                ],
            ],
        ];
    },
    'dependencies' => [
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Actions\\User\\UpdateUserPasswordAction.php' => [
            'fileHash' => '8667c114bbfad3731a7a65ac6a02f262d10a4215',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Data\\UserData.php' => [
            'fileHash' => 'cd727a7b0d8493049ddc5065397e708e5bb4d613',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Enum\\PermissionEnum.php' => [
            'fileHash' => 'a7bc0e7632b4eac3c034caba7e2cc37a0ba3225e',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
                2 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Providers\\AppServiceProvider.php',
                3 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Enum\\RoleEnum.php' => [
            'fileHash' => '3c4b64e822340b30d6cd9252429ad9b6b9f7b6e1',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
                1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Resources\\User\\UserResource.php',
                2 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php' => [
            'fileHash' => '3a09ee0a2ef1f4b2bdb3c008f81f672754db6913',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\ConfirmablePasswordController.php' => [
            'fileHash' => 'c3b28005a59defb91ab9d73d178986ba09719a45',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php' => [
            'fileHash' => '0d4ab28ff7e1e30cbee8a65072bb5e3c438fe795',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationPromptController.php' => [
            'fileHash' => 'daaf75938b7aeba1dbb3030d1fb16aae4e4765cc',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\NewPasswordController.php' => [
            'fileHash' => '85718e0bda49b9985ca728c087fbf852e11fd856',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php' => [
            'fileHash' => '3f24f661179fa31db0c14e7fcbf17841d8ea170f',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php' => [
            'fileHash' => 'ea0887ffa586f9217fac808477c6882efdd20602',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php' => [
            'fileHash' => '44d517f0d5e4d430b2f39d919be4bafdc3bfab41',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php' => [
            'fileHash' => '0d79ed0f2244e4bd373d9712e750d529c8e420e8',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\web.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Controller.php' => [
            'fileHash' => '387651722272409b0382337e02b02c508bb85e4a',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php',
                1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\ConfirmablePasswordController.php',
                2 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php',
                3 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationPromptController.php',
                4 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\NewPasswordController.php',
                5 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php',
                6 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php',
                7 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php',
                8 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
                9 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                10 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                11 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
                12 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php',
                13 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\settings.php',
                14 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\web.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php' => [
            'fileHash' => 'f0768e56b1a7de7f475c174ed35027b812c6fef2',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\settings.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php' => [
            'fileHash' => 'deb230b78c1979f16fa97391f0f91756e4bcaddf',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\settings.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php' => [
            'fileHash' => '07384b49890c93ca762ff821d4e4ddca164d4c54',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\web.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleAppearance.php' => [
            'fileHash' => '7fe3df975cb41738e96580627a0543c74e925cb4',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\bootstrap\\app.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php' => [
            'fileHash' => '74d4f752dc6b72f7f7c802295ca51093822c7ea2',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\bootstrap\\app.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Auth\\LoginRequest.php' => [
            'fileHash' => '927f218828f666f1b6518ca7befa9f56ada138ca',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => [
            'fileHash' => 'f34714566b8476203e95bd3c92aacb33a3c18cde',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Resources\\User\\UserResource.php' => [
            'fileHash' => 'b88ce2da21ad7c2db12d6148a15ca81194f13b0c',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php' => [
            'fileHash' => 'd5278569e17ca4796192d2ba880f76841b26c24c',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\CommonArrayRule.php' => [
            'fileHash' => '9631f3cad6c4c456bb3c09d385eeeb17f9b321db',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\CommonRule.php' => [
            'fileHash' => '6781fdb9ca6464b2c056a72251c2b2e1b7fd7aca',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\UserRule.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\Concerns\\HasParameterRule.php' => [
            'fileHash' => '3482a62e4b1cd204e3b84ec7090afefe7f26e47d',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php',
            ],
            'usedTraitDependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\Concerns\\HasSimpleRule.php' => [
            'fileHash' => 'fba5fd1fd692d20dce54a8f9d9d3932207eb4c57',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php',
            ],
            'usedTraitDependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\UserRule.php' => [
            'fileHash' => 'd0f3d44ed0aeb61ebe20363c5a3bb9d4bb978460',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Jobs\\Backup\\GenerateDatabaseBackup.php' => [
            'fileHash' => 'e278965c157d44a5d2368165581a8847b610d1e4',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Models\\User.php' => [
            'fileHash' => '65c12456247d854c1e1da890e40ccb1351c8da81',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Actions\\User\\UpdateUserPasswordAction.php',
                1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\ConfirmablePasswordController.php',
                2 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php',
                3 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationPromptController.php',
                4 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\NewPasswordController.php',
                5 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php',
                6 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php',
                7 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                8 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                9 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
                10 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                11 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
                12 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Resources\\User\\UserResource.php',
                13 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\UserRule.php',
                14 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Providers\\AppServiceProvider.php',
                15 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Services\\UserService.php',
                16 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\auth.php',
                17 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\factories\\UserFactory.php',
                18 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Providers\\AppServiceProvider.php' => [
            'fileHash' => '4805a2e767a4ee73a9f3376cfa5edc711618d34c',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Services\\UserService.php' => [
            'fileHash' => 'ffc2d4fc5b55d1cffb9eb67ea2b59e0ca3d1b0c5',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Traits\\AuthUserTrait.php' => [
            'fileHash' => 'b156fa8fb9c25b6676128126545abe94283242a9',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\bootstrap\\app.php',
            ],
            'usedTraitDependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\bootstrap\\app.php' => [
            'fileHash' => 'f9fe93f00ad4d2984fa1b12d1394da7ee5ae7624',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\app.php' => [
            'fileHash' => 'bead9a0901af94fb9ce71348d12e7313614d605f',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\auth.php' => [
            'fileHash' => '6b861c651d5435e57426b605c053571e438b9826',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\backup.php' => [
            'fileHash' => '0a6cb51c55552bae9d84ac1a7ebf8f7265d1d434',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\cache.php' => [
            'fileHash' => '1589cf782b5c2aa883eb6b300f5bccf9583d6f85',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\data.php' => [
            'fileHash' => '16eec0230bbe6eadd7005f6e8cfe270915c59c1c',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\database.php' => [
            'fileHash' => '938d1c3990c7f4ddc68e1c045099f9417a6efc98',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\debugbar.php' => [
            'fileHash' => '8877d8f667e3a9104fa40760d316c13e37014568',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\filesystems.php' => [
            'fileHash' => '11133b3b92c05c45912867bcbed5d6daabf650fa',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\ide-helper.php' => [
            'fileHash' => '37266faeb12aba3f8de93414829d77339914ddd4',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\inertia.php' => [
            'fileHash' => 'ace16862e881f8e94e82c3bb52454911408d7c6f',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\log-viewer.php' => [
            'fileHash' => 'e72d9c9d8b8d6f3d15ea9d33ac48d9757679e3dc',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\logging.php' => [
            'fileHash' => '5d11c25540ce3f4844e71906558c72d3bd7cca31',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\mail.php' => [
            'fileHash' => '061a117296ae263e41ab8004abb69da0d98c9979',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\permission.php' => [
            'fileHash' => '04bff12edadf4c0b7ae54c2bb83d479f1c6bb983',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\queue.php' => [
            'fileHash' => '557a89d4d8625e682b9874c36a930d463533c052',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\services.php' => [
            'fileHash' => 'f212df18b5442d3c853dd3b5ae3b4da433619186',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\session.php' => [
            'fileHash' => '7e2728329cad369f8afa06b322a7e62eb6d2c73f',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\factories\\UserFactory.php' => [
            'fileHash' => '7beae40215cdfa7df605da2ec16aba49d4eb380f',
            'dependentFiles' => [
                0 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Actions\\User\\UpdateUserPasswordAction.php',
                1 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\ConfirmablePasswordController.php',
                2 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php',
                3 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationPromptController.php',
                4 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\NewPasswordController.php',
                5 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php',
                6 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php',
                7 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php',
                8 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php',
                9 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php',
                10 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php',
                11 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php',
                12 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Resources\\User\\UserResource.php',
                13 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\UserRule.php',
                14 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Models\\User.php',
                15 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Providers\\AppServiceProvider.php',
                16 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Services\\UserService.php',
                17 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\config\\auth.php',
                18 => 'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php',
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\migrations\\0001_01_01_000000_create_users_table.php' => [
            'fileHash' => '26c9a521a57007edf1e9e71d15ee4b44a779f819',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\migrations\\0001_01_01_000001_create_cache_table.php' => [
            'fileHash' => '7baa5e6b288f5a8c3b30a43e17790969a61fb6ce',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\migrations\\0001_01_01_000002_create_jobs_table.php' => [
            'fileHash' => '78874aec6df6c11c8eb06704e29640ca3006911f',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php' => [
            'fileHash' => 'b18423fc8519958029bbbd2d4ba23a4aaa6c4152',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\public\\index.php' => [
            'fileHash' => 'bce0ba7eb592f888ed84acd057f87e7de16c1ee4',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\auth.php' => [
            'fileHash' => '8a991f4514192e23c19e29f90894d8d25db406ae',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\console.php' => [
            'fileHash' => '07b77c6afc0aa7b564129fbb8de8f9d9f667cf50',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\settings.php' => [
            'fileHash' => '0adb9fae5c9312e41e282fcc8c97f58bbdf76e32',
            'dependentFiles' => [
            ],
        ],
        'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\routes\\web.php' => [
            'fileHash' => '047e19650ca6aacf434c669008c237fabfe79422',
            'dependentFiles' => [
            ],
        ],
    ],
    'exportedNodesCallback' => static function (): array {
        return [
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Actions\\User\\UpdateUserPasswordAction.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Actions\\User\\UpdateUserPasswordAction',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Lorisleiva\\Actions\\Concerns\\AsAction',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Summary of handle
     */',
                                'namespace' => 'App\\Actions\\User',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'asaction' => 'Lorisleiva\\Actions\\Concerns\\AsAction',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'password',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Data\\UserData.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Data\\UserData',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Spatie\\LaravelData\\Data',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'name',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                        0 => PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state([
                                            'name' => 'Spatie\\LaravelData\\Attributes\\Validation\\Max',
                                            'args' => [
                                                0 => '255',
                                            ],
                                        ]),
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'email',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                        0 => PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state([
                                            'name' => 'Spatie\\LaravelData\\Attributes\\Validation\\Max',
                                            'args' => [
                                                0 => '255',
                                            ],
                                        ]),
                                        1 => PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state([
                                            'name' => 'Spatie\\LaravelData\\Attributes\\Validation\\Email',
                                            'args' => [
                                            ],
                                        ]),
                                    ],
                                ]),
                                2 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'password',
                                    'type' => '?string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                3 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'email_verified_at',
                                    'type' => '?Carbon\\CarbonInterface',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                4 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'created_at',
                                    'type' => '?Carbon\\CarbonInterface',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                5 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'updated_at',
                                    'type' => '?Carbon\\CarbonInterface',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Enum\\PermissionEnum.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state([
                    'name' => 'App\\Enum\\PermissionEnum',
                    'scalarType' => 'string',
                    'phpDoc' => null,
                    'implements' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'BACKUP_VIEW',
                            'value' => '\'backup_view\'',
                            'phpDoc' => null,
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'BACKUP_GENERATE',
                            'value' => '\'backup_generate\'',
                            'phpDoc' => null,
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'BACKUP_DOWNLOAD',
                            'value' => '\'backup_download\'',
                            'phpDoc' => null,
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'BACKUP_DELETE',
                            'value' => '\'backup_delete\'',
                            'phpDoc' => null,
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'USER_VIEW',
                            'value' => '\'user_view\'',
                            'phpDoc' => null,
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'USER_CREATE',
                            'value' => '\'user_create\'',
                            'phpDoc' => null,
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'USER_UPDATE',
                            'value' => '\'user_update\'',
                            'phpDoc' => null,
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'USER_DELETE',
                            'value' => '\'user_delete\'',
                            'phpDoc' => null,
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'ROLE_VIEW',
                            'value' => '\'role_view\'',
                            'phpDoc' => null,
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'ROLE_CREATE',
                            'value' => '\'role_create\'',
                            'phpDoc' => null,
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'ROLE_UPDATE',
                            'value' => '\'role_update\'',
                            'phpDoc' => null,
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'ROLE_DELETE',
                            'value' => '\'role_delete\'',
                            'phpDoc' => null,
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'PERMISSION_VIEW',
                            'value' => '\'permission_view\'',
                            'phpDoc' => null,
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'PERMISSION_CREATE',
                            'value' => '\'permission_create\'',
                            'phpDoc' => null,
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'PERMISSION_UPDATE',
                            'value' => '\'permission_update\'',
                            'phpDoc' => null,
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'PERMISSION_DELETE',
                            'value' => '\'permission_delete\'',
                            'phpDoc' => null,
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Enum\\RoleEnum.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedEnumNode::__set_state([
                    'name' => 'App\\Enum\\RoleEnum',
                    'scalarType' => 'string',
                    'phpDoc' => null,
                    'implements' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'USER',
                            'value' => '\'user\'',
                            'phpDoc' => null,
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'SUPER_ADMIN',
                            'value' => '\'super_admin\'',
                            'phpDoc' => null,
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedEnumCaseNode::__set_state([
                            'name' => 'ADMIN',
                            'value' => '\'admin\'',
                            'phpDoc' => null,
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\AuthenticatedSessionController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the login page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'route' => 'Illuminate\\Support\\Facades\\Route',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming authentication request.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'route' => 'Illuminate\\Support\\Facades\\Route',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'App\\Http\\Requests\\Auth\\LoginRequest',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'destroy',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Destroy an authenticated session.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'loginrequest' => 'App\\Http\\Requests\\Auth\\LoginRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'route' => 'Illuminate\\Support\\Facades\\Route',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\ConfirmablePasswordController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'show',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the confirm password page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Confirm the user\'s password.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationNotificationController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Send a new email verification notification.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\EmailVerificationPromptController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__invoke',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the email verification prompt page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response|Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\NewPasswordController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\NewPasswordController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the password reset page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'user' => 'App\\Models\\User',
                                    'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'password' => 'Illuminate\\Support\\Facades\\Password',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'rules' => 'Illuminate\\Validation\\Rules',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming new password request.
     *
     * @throws ValidationException
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'user' => 'App\\Models\\User',
                                    'passwordreset' => 'Illuminate\\Auth\\Events\\PasswordReset',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'password' => 'Illuminate\\Support\\Facades\\Password',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'rules' => 'Illuminate\\Validation\\Rules',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\PasswordResetLinkController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the password reset link request page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'password' => 'Illuminate\\Support\\Facades\\Password',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming password reset link request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'password' => 'Illuminate\\Support\\Facades\\Password',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\RegisteredUserController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the registration page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'user' => 'App\\Models\\User',
                                    'registered' => 'Illuminate\\Auth\\Events\\Registered',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'rules' => 'Illuminate\\Validation\\Rules',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming registration request.
     *
     * @throws \\Illuminate\\Validation\\ValidationException
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'user' => 'App\\Models\\User',
                                    'registered' => 'Illuminate\\Auth\\Events\\Registered',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'rules' => 'Illuminate\\Validation\\Rules',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Auth\\VerifyEmailController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__invoke',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Mark the authenticated user\'s email address as verified.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Auth',
                                'uses' => [
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'emailverificationrequest' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Foundation\\Auth\\EmailVerificationRequest',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\BackupController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\BackupController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'index',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'generate',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'destroy',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'download',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Symfony\\Component\\HttpFoundation\\BinaryFileResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Controller.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Controller',
                    'phpDoc' => null,
                    'abstract' => true,
                    'final' => false,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Foundation\\Auth\\Access\\AuthorizesRequests',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\PasswordController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Settings\\PasswordController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the user\'s password settings page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'updateuserpasswordaction' => 'App\\Actions\\User\\UpdateUserPasswordAction',
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'password' => 'Illuminate\\Validation\\Rules\\Password',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Update the user\'s password.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'updateuserpasswordaction' => 'App\\Actions\\User\\UpdateUserPasswordAction',
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'password' => 'Illuminate\\Validation\\Rules\\Password',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\Settings\\ProfileController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\Settings\\ProfileController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Show the user\'s profile settings page.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'userdata' => 'App\\Data\\UserData',
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Update the user\'s profile settings.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'userdata' => 'App\\Data\\UserData',
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'destroy',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Delete the user\'s account.
     */',
                                'namespace' => 'App\\Http\\Controllers\\Settings',
                                'uses' => [
                                    'userdata' => 'App\\Data\\UserData',
                                    'controller' => 'App\\Http\\Controllers\\Controller',
                                    'profileupdaterequest' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                                    'redirectresponse' => 'Illuminate\\Http\\RedirectResponse',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'inertia' => 'Inertia\\Inertia',
                                    'response' => 'Inertia\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Controllers\\UserController.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Controllers\\UserController',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'App\\Http\\Controllers\\Controller',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'index',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'create',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'store',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'edit',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'editPermission',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Inertia\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'updatePermission',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'destroy',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Http\\RedirectResponse',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleAppearance.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\HandleAppearance',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'closure' => 'Closure',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'view' => 'Illuminate\\Support\\Facades\\View',
                                    'response' => 'Symfony\\Component\\HttpFoundation\\Response',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'next',
                                    'type' => 'Closure',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Middleware\\HandleInertiaRequests.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Middleware\\HandleInertiaRequests',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Inertia\\Middleware',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'App\\Traits\\AuthUserTrait',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'rootView',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The root template that\'s loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'authusertrait' => 'App\\Traits\\AuthUserTrait',
                                    'inspiring' => 'Illuminate\\Foundation\\Inspiring',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'middleware' => 'Inertia\\Middleware',
                                    'ziggy' => 'Tighten\\Ziggy\\Ziggy',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'version',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'authusertrait' => 'App\\Traits\\AuthUserTrait',
                                    'inspiring' => 'Illuminate\\Foundation\\Inspiring',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'middleware' => 'Inertia\\Middleware',
                                    'ziggy' => 'Tighten\\Ziggy\\Ziggy',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?string',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'share',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */',
                                'namespace' => 'App\\Http\\Middleware',
                                'uses' => [
                                    'authusertrait' => 'App\\Traits\\AuthUserTrait',
                                    'inspiring' => 'Illuminate\\Foundation\\Inspiring',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'middleware' => 'Inertia\\Middleware',
                                    'ziggy' => 'Tighten\\Ziggy\\Ziggy',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Auth\\LoginRequest.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'authorize',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'true',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'rules',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
     */',
                                'namespace' => 'App\\Http\\Requests\\Auth',
                                'uses' => [
                                    'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'authenticate',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Attempt to authenticate the request\'s credentials.
     *
     * @throws ValidationException
     */',
                                'namespace' => 'App\\Http\\Requests\\Auth',
                                'uses' => [
                                    'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'ensureIsNotRateLimited',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Ensure the login request is not rate limited.
     *
     * @throws ValidationException
     */',
                                'namespace' => 'App\\Http\\Requests\\Auth',
                                'uses' => [
                                    'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'throttleKey',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the rate limiting throttle key for the request.
     */',
                                'namespace' => 'App\\Http\\Requests\\Auth',
                                'uses' => [
                                    'lockout' => 'Illuminate\\Auth\\Events\\Lockout',
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'ratelimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'validationexception' => 'Illuminate\\Validation\\ValidationException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Requests\\Settings\\ProfileUpdateRequest.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Requests\\Settings\\ProfileUpdateRequest',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'rules',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */',
                                'namespace' => 'App\\Http\\Requests\\Settings',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'validationrule' => 'Illuminate\\Contracts\\Validation\\ValidationRule',
                                    'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Resources\\User\\UserResource.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Resources\\User\\UserResource',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'toArray',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */',
                                'namespace' => 'App\\Http\\Resources\\User',
                                'uses' => [
                                    'roleenum' => 'App\\Enum\\RoleEnum',
                                    'user' => 'App\\Models\\User',
                                    'request' => 'Illuminate\\Http\\Request',
                                    'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
                                    'permission' => 'Spatie\\Permission\\Models\\Permission',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'request',
                                    'type' => 'Illuminate\\Http\\Request',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\ChainRule.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Rules\\ChainRule',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                        1 => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'rules',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'hasparameterrule' => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                                    'hassimplerule' => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'array',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'make',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'toArray',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return string[]
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'hasparameterrule' => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                                    'hassimplerule' => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'toString',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'merge',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  string[]  $rule
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'hasparameterrule' => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                                    'hassimplerule' => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'rule',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\CommonArrayRule.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Rules\\CommonArrayRule',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'shortNullableString',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function shortNullableString() returns an array containing validation rules for a short
     * nullable string with a maximum length of 255 characters.
     *
     * @return string[] The method `shortNullableString()` returns an array containing the following
     *                  validation rules for a short nullable string: [\'nullable\', \'string\', \'max:255\'].
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'shortRequiredString',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `shortRequiredString` returns an array containing validation rules for a required
     * string with a maximum length of 255 characters in PHP.
     *
     * @return string[] An array containing the values \'required\', \'string\', and \'max:255\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'shortNullableNumeric',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function shortNullableNumeric() returns an array containing the strings \'nullable\' and
     * \'numeric\'.
     *
     * @return string[] The `shortNullableNumeric` function is returning an array containing the values
     *                  \'nullable\' and \'numeric\'.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'shortRequiredNumeric',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function shortRequiredNumeric() returns an array containing the validation rules \'required\' and
     * \'numeric\'.
     *
     * @return string[] An array containing the validation rules \'required\' and \'numeric\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'longNullableString',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function "longNullableString" returns an array containing the strings \'nullable\' and \'string\'.
     *
     * @return string[] The `longNullableString` function is returning an array containing the values
     *                  \'nullable\' and \'string\'.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'longRequiredString',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function returns an array containing the strings \'required\' and \'string\'.
     *
     * @return string[] An array containing the strings \'required\' and \'string\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredBoolean',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `requiredBoolean` returns an array containing the values \'required\' and \'boolean\'.
     *
     * @return string[] An array containing the values \'required\' and \'boolean\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableBoolean',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `nullableBoolean` returns an array containing the values \'nullable\' and \'boolean\'.
     *
     * @return string[] The `nullableBoolean` function is returning an array containing the values \'nullable\'
     *                  and \'boolean\'.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredDate',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `requiredDate` in PHP returns an array containing the values \'required\' and \'date\'.
     *
     * @return string[] An array containing the values \'required\' and \'date\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableDate',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `nullableDate` returns an array containing the validation rules \'nullable\' and \'date\'
     * in PHP.
     *
     * @return string[] The `nullableDate` function is returning an array containing the values \'nullable\' and
     *                  \'date\'.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredURL',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `requiredURL` in PHP returns an array containing the strings \'required\' and \'url\'.
     *
     * @return string[] An array containing two elements: \'required\' and \'url\'.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableURL',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `nullableURL` returns an array containing the strings \'nullable\' and \'url\'.
     *
     * @return string[] An array containing the values \'nullable\' and \'url\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredCaptcha',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function "requiredCaptcha" returns an array containing the values \'required\' and \'captcha\'.
     *
     * @return string[] An array containing the values \'required\' and \'captcha\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableCaptcha',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `nullableCaptcha` returns an array containing the values \'nullable\' and \'captcha\'.
     *
     * @return string[] An array containing the values \'nullable\' and \'captcha\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredImage',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `requiredImage` in PHP returns an array containing validation rules for a required
     * image file with a maximum size of 5024 bytes.
     *
     * @return string[] An array containing the validation rules for a required image upload. The rules
     *                  include \'required\' to ensure the field is not empty, \'file\' to ensure the input is a file, and
     *                  \'max:5024\' to set the maximum file size allowed to be uploaded.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableImage',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `nullableImage` returns an array with validation rules for a nullable image input with
     * a maximum size of 5024 bytes.
     *
     * @return string[] An array containing the values \'nullable\' and \'max:5024\' is being returned.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        16 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredYearRange',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The function `requiredYearRange` returns an array with validation rules for a required year range
     * in PHP.
     *
     * @return string[] An array containing two elements is being returned. The first element is the string
     *                  \'required\', and the second element is a regular expression pattern \'/^\\d{4}-\\d{4}$/\' which matches
     *                  a year range in the format \'YYYY-YYYY\'.
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\CommonRule.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Rules\\CommonRule',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'phpPhonenumber',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * format for phone number in the philippines
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'preventDigit',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * It prevents digit in the string
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'yearMax',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * It is year validator for max year
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'string',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\Concerns\\HasParameterRule.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'name' => 'App\\Http\\Rules\\Concerns\\HasParameterRule',
                    'phpDoc' => null,
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'rules',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'array',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'after',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'date',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'afterOrEqual',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'date',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'between',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'min',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'max',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'before',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'date',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'currentPassword',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'password',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'endsWith',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'dimensions',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  array<string, mixed>  $options
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'options',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'dateFormat',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'format',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'dateEquals',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'date',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'decimal',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'min',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'max',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'declinedIf',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'different',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'digits',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'digitsBetween',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'min',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'max',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'doesntEndWith',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        16 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'doesntStartWith',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        17 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'greaterThan',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        18 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'greaterThanOrEqual',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        19 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'in',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  array<string, mixed>  $values
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'values',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        20 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'has',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        21 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'inArray',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        22 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lessThan',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        23 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lessThanOrEqual',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        24 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'max',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        25 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'maxDigits',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        26 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mimes',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  string[]  $value
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        27 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'mimeTypes',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  string[]  $value
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        28 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'minDigits',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        29 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'multipleOf',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        30 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'min',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        31 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'notIn',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  array<string, mixed>  $values
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'values',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        32 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'notRegex',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'pattern',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        33 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'regex',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'pattern',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        34 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredArrayKeys',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  string[]  $keys
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'keys',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        35 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredIf',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        36 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredUnless',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        37 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredWith',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        38 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredWithout',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        39 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'requiredWithoutAll',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        40 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'same',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'field',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        41 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'startsWith',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        42 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'prohibitedIf',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'otherField',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'value',
                                    'type' => 'string',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        43 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'maxYear',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'year',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        44 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'minYear',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'year',
                                    'type' => 'int',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        45 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'skipFileIfNo',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Conditionally adds file validation rules only if a file is provided.
     *
     * This is useful when the field is marked as nullable — if no file is passed,
     * the rule is skipped to avoid unnecessary validation errors.
     *
     * Example:
     *   ChainRule::make()
     *       ->nullable()
     *       ->skipFileIfNo($request->file(\'image\'))
     *       ->skipImageIfNo($request->file(\'image\'))
     *       ->skipMimeTypesIfNo([\'image/jpeg\', \'image/png\'], $request->file(\'image\'));
     *
     * ⚠️ Note: You must call ->nullable() before using these methods,
     * otherwise a LogicException will be thrown.
     *
     * @param  mixed  $file
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'file',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        46 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'skipImageIfNo',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  mixed  $file
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'file',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        47 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'skipMimesIfNo',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Conditionally applies `mimes` validation only if a file is provided.
     *
     * The `mimes` rule checks the file **extension**, while `mimetypes` checks the file’s
     * actual MIME type from the uploaded content. Use `mimes` when you want to allow
     * files by their common extensions (e.g., jpg, png, pdf).
     *
     * Example:
     *   ChainRule::make()
     *       ->nullable()
     *       ->skipMimesIfNo([\'jpg\', \'png\', \'pdf\'], $request->file(\'document\'));
     *
     * @param  array<string>  $arrayValues  Allowed file extensions.
     *                                      Common examples:
     *                                      - Images: [\'jpg\', \'jpeg\', \'png\', \'gif\', \'webp\']
     *                                      - Documents: [\'pdf\', \'doc\', \'docx\', \'txt\']
     *                                      - Spreadsheets: [\'xls\', \'xlsx\', \'csv\']
     *                                      - Archives: [\'zip\', \'rar\', \'7z\']
     * @param  mixed|null  $file  The uploaded file instance or null
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'arrayValues',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'file',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        48 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'skipMimeTypesIfNo',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Conditionally applies `mimetypes` validation only if a file is provided.
     *
     * Use this when the field is nullable — if no file is uploaded, the rule is skipped.
     *
     * Example:
     *   ChainRule::make()
     *       ->nullable()
     *       ->skipMimeTypesIfNo([\'image/jpeg\', \'image/png\'], $request->file(\'avatar\'));
     *
     * @param  array<string>  $arrayValues  Allowed MIME types.
     *                                      Common examples:
     *                                      - Images: [\'image/jpeg\', \'image/png\', \'image/gif\', \'image/webp\']
     *                                      - Documents: [\'application/pdf\', \'application/msword\',
     *                                      \'application/vnd.openxmlformats-officedocument.wordprocessingml.document\']
     *                                      - Spreadsheets: [\'application/vnd.ms-excel\',
     *                                      \'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\']
     * @param  mixed|null  $file  The uploaded file instance or null
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'arrayValues',
                                    'type' => 'array',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                                1 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'file',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        49 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'shouldSkipFile',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @param  mixed  $file
     *
     * @throws LogicException
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                    'logicexception' => 'LogicException',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'bool',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'file',
                                    'type' => null,
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\Concerns\\HasSimpleRule.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'name' => 'App\\Http\\Rules\\Concerns\\HasSimpleRule',
                    'phpDoc' => null,
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'rules',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @var string[]
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => 'array',
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'ascii',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'accepted',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'activeUrl',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'alpha',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'alphabetAndNumber',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'alphaDash',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'array',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'bail',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boolean',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'confirmed',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'date',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'declined',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'distinct',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'email',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'file',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        16 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'filled',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        17 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'get',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        18 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'image',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        19 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'inspect',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        20 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'integer',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        21 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'ip',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        22 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'ipv4',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        23 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'ipv6',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        24 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'json',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        25 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lowercase',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        26 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'macAddress',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        27 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullable',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        28 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'numeric',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        29 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'required',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        30 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'regexYearRange',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        31 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'string',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * It will add a string
     */',
                                'namespace' => 'App\\Http\\Rules\\Concerns',
                                'uses' => [
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        32 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'sometimes',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        33 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'uppercase',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        34 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'present',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        35 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'password',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        36 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'prohibited',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        37 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'timezone',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        38 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'update',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        39 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'url',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        40 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'uuid',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        41 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'currentYear',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'self',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Http\\Rules\\UserRule.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Http\\Rules\\UserRule',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'name',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableName',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'firstName',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        3 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'lastName',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        4 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'middleName',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        5 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'suffix',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        6 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'phoneNumber',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        7 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullablePhoneNumber',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        8 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'email',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        9 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'uniqueEmail',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Summary of uniqueEmail
     *
     * @return array<\\Illuminate\\Validation\\Rules\\Unique|string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => '?App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => true,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        10 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'username',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        11 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'role',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        12 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'gender',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        13 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableGender',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        14 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'birthdate',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        15 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'nullableBirthdate',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return array<string>
     */',
                                'namespace' => 'App\\Http\\Rules',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'rule' => 'Illuminate\\Validation\\Rule',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => true,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Jobs\\Backup\\GenerateDatabaseBackup.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Jobs\\Backup\\GenerateDatabaseBackup',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                        0 => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Foundation\\Queue\\Queueable',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => '__construct',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Create a new job instance.
     */',
                                'namespace' => 'App\\Jobs\\Backup',
                                'uses' => [
                                    'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
                                    'queueable' => 'Illuminate\\Foundation\\Queue\\Queueable',
                                    'artisan' => 'Illuminate\\Support\\Facades\\Artisan',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => null,
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'handle',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Execute the job.
     */',
                                'namespace' => 'App\\Jobs\\Backup',
                                'uses' => [
                                    'shouldqueue' => 'Illuminate\\Contracts\\Queue\\ShouldQueue',
                                    'queueable' => 'Illuminate\\Foundation\\Queue\\Queueable',
                                    'artisan' => 'Illuminate\\Support\\Facades\\Artisan',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Models\\User.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Models\\User',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \\Illuminate\\Support\\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property-read \\Illuminate\\Notifications\\DatabaseNotificationCollection<int, \\Illuminate\\Notifications\\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, \\Spatie\\Permission\\Models\\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, \\Spatie\\Permission\\Models\\Role> $roles
 * @property-read int|null $roles_count
 *
 * @method static \\Database\\Factories\\UserFactory factory($count = null, $state = [])
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User newModelQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User newQuery()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User permission($permissions, $without = false)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User query()
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User role($roles, $guard = null, $without = false)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User withoutPermission($permissions)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<static>|User withoutRole($roles, $guard = null)
 *
 * @mixin \\Illuminate\\Database\\Eloquent\\Model
 */',
                        'namespace' => 'App\\Models',
                        'uses' => [
                            'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                            'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                            'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                            'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Foundation\\Auth\\User',
                    'implements' => [
                    ],
                    'usedTraits' => [
                        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                        1 => 'Spatie\\Permission\\Traits\\HasRoles',
                        2 => 'Illuminate\\Notifications\\Notifiable',
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'fillable',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state([
                            'names' => [
                                0 => 'hidden',
                            ],
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'type' => null,
                            'public' => false,
                            'private' => false,
                            'static' => false,
                            'readonly' => false,
                            'abstract' => false,
                            'final' => false,
                            'publicSet' => false,
                            'protectedSet' => false,
                            'privateSet' => false,
                            'virtual' => false,
                            'attributes' => [
                            ],
                            'hooks' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'casts',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
                                'namespace' => 'App\\Models',
                                'uses' => [
                                    'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
                                    'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
                                    'notifiable' => 'Illuminate\\Notifications\\Notifiable',
                                    'hasroles' => 'Spatie\\Permission\\Traits\\HasRoles',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => false,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Providers\\AppServiceProvider.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Providers\\AppServiceProvider',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Support\\ServiceProvider',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'register',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Register any application services.
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'permissionenum' => 'App\\Enum\\PermissionEnum',
                                    'user' => 'App\\Models\\User',
                                    'response' => 'Illuminate\\Auth\\Access\\Response',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'db' => 'Illuminate\\Support\\Facades\\DB',
                                    'gate' => 'Illuminate\\Support\\Facades\\Gate',
                                    'url' => 'Illuminate\\Support\\Facades\\URL',
                                    'vite' => 'Illuminate\\Support\\Facades\\Vite',
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'logviewer' => 'Opcodes\\LogViewer\\Facades\\LogViewer',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'boot',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Bootstrap any application services.
     */',
                                'namespace' => 'App\\Providers',
                                'uses' => [
                                    'permissionenum' => 'App\\Enum\\PermissionEnum',
                                    'user' => 'App\\Models\\User',
                                    'response' => 'Illuminate\\Auth\\Access\\Response',
                                    'model' => 'Illuminate\\Database\\Eloquent\\Model',
                                    'db' => 'Illuminate\\Support\\Facades\\DB',
                                    'gate' => 'Illuminate\\Support\\Facades\\Gate',
                                    'url' => 'Illuminate\\Support\\Facades\\URL',
                                    'vite' => 'Illuminate\\Support\\Facades\\Vite',
                                    'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
                                    'logviewer' => 'Opcodes\\LogViewer\\Facades\\LogViewer',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Services\\UserService.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'App\\Services\\UserService',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => null,
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getUsers',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * @return LengthAwarePaginator<int,User>
     */',
                                'namespace' => 'App\\Services',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'lengthawarepaginator' => 'Illuminate\\Pagination\\LengthAwarePaginator',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Pagination\\LengthAwarePaginator',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\app\\Traits\\AuthUserTrait.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state([
                    'name' => 'App\\Traits\\AuthUserTrait',
                    'phpDoc' => null,
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'getCan',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get cached permissions for a user.
     *
     * @return Collection<string, string>
     */',
                                'namespace' => 'App\\Traits',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'permission' => 'Spatie\\Permission\\Models\\Permission',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'Illuminate\\Support\\Collection',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'forgetCan',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Forget cached permissions for a user.
     */',
                                'namespace' => 'App\\Traits',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'permission' => 'Spatie\\Permission\\Models\\Permission',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                                0 => PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state([
                                    'name' => 'user',
                                    'type' => 'App\\Models\\User',
                                    'byRef' => false,
                                    'variadic' => false,
                                    'hasDefault' => false,
                                    'attributes' => [
                                    ],
                                ]),
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'user',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Get the currently authenticated user.
     */',
                                'namespace' => 'App\\Traits',
                                'uses' => [
                                    'user' => 'App\\Models\\User',
                                    'collection' => 'Illuminate\\Support\\Collection',
                                    'auth' => 'Illuminate\\Support\\Facades\\Auth',
                                    'permission' => 'Spatie\\Permission\\Models\\Permission',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => '?App\\Models\\User',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\factories\\UserFactory.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Database\\Factories\\UserFactory',
                    'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                        'phpDocString' => '/**
 * @extends \\Illuminate\\Database\\Eloquent\\Factories\\Factory<\\App\\Models\\User>
 */',
                        'namespace' => 'Database\\Factories',
                        'uses' => [
                            'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                            'user' => 'Illuminate\\Foundation\\Auth\\User',
                            'hash' => 'Illuminate\\Support\\Facades\\Hash',
                            'str' => 'Illuminate\\Support\\Str',
                        ],
                        'constUses' => [
                        ],
                    ]),
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'definition',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Define the model\'s default state.
     *
     * @return array<string, mixed>
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'user' => 'Illuminate\\Foundation\\Auth\\User',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'array',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'unverified',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Indicate that the model\'s email address should be unverified.
     */',
                                'namespace' => 'Database\\Factories',
                                'uses' => [
                                    'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
                                    'user' => 'Illuminate\\Foundation\\Auth\\User',
                                    'hash' => 'Illuminate\\Support\\Facades\\Hash',
                                    'str' => 'Illuminate\\Support\\Str',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        2 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'configure',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'static',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
            'C:\\Users\\User\\Herd\\custom-starter-kit-laravel-12-react\\database\\seeders\\DatabaseSeeder.php' => [
                0 => PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state([
                    'name' => 'Database\\Seeders\\DatabaseSeeder',
                    'phpDoc' => null,
                    'abstract' => false,
                    'final' => true,
                    'extends' => 'Illuminate\\Database\\Seeder',
                    'implements' => [
                    ],
                    'usedTraits' => [
                    ],
                    'traitUseAdaptations' => [
                    ],
                    'statements' => [
                        0 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'run',
                            'phpDoc' => PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state([
                                'phpDocString' => '/**
     * Seed the application\'s database.
     */',
                                'namespace' => 'Database\\Seeders',
                                'uses' => [
                                    'permissionenum' => 'App\\Enum\\PermissionEnum',
                                    'roleenum' => 'App\\Enum\\RoleEnum',
                                    'user' => 'App\\Models\\User',
                                    'seeder' => 'Illuminate\\Database\\Seeder',
                                    'str' => 'Illuminate\\Support\\Str',
                                    'permission' => 'Spatie\\Permission\\Models\\Permission',
                                    'role' => 'Spatie\\Permission\\Models\\Role',
                                ],
                                'constUses' => [
                                ],
                            ]),
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                        1 => PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state([
                            'name' => 'createUsers',
                            'phpDoc' => null,
                            'byRef' => false,
                            'public' => true,
                            'private' => false,
                            'abstract' => false,
                            'final' => false,
                            'static' => false,
                            'returnType' => 'void',
                            'parameters' => [
                            ],
                            'attributes' => [
                            ],
                        ]),
                    ],
                    'attributes' => [
                    ],
                ]),
            ],
        ];
    },
];
