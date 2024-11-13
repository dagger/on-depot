<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger;

/**
 * The root of the DAG.
 */
class Client extends Client\AbstractClient
{
    /**
     * Retrieves a content-addressed blob.
     */
    public function blob(string $digest, int $size, string $mediaType, string $uncompressed): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('blob');
        $innerQueryBuilder->setArgument('digest', $digest);
        $innerQueryBuilder->setArgument('size', $size);
        $innerQueryBuilder->setArgument('mediaType', $mediaType);
        $innerQueryBuilder->setArgument('uncompressed', $uncompressed);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Retrieves a container builtin to the engine.
     */
    public function builtinContainer(string $digest): Container
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('builtinContainer');
        $innerQueryBuilder->setArgument('digest', $digest);
        return new \Dagger\Container($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Constructs a cache volume for a given cache key.
     */
    public function cacheVolume(string $key): CacheVolume
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('cacheVolume');
        $innerQueryBuilder->setArgument('key', $key);
        return new \Dagger\CacheVolume($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Creates a scratch container.
     *
     * Optional platform argument initializes new containers to execute and publish as that platform. Platform defaults to that of the builder's host.
     */
    public function container(?Platform $platform = null): Container
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('container');
        if (null !== $platform) {
        $innerQueryBuilder->setArgument('platform', $platform);
        }
        return new \Dagger\Container($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * The FunctionCall context that the SDK caller is currently executing in.
     *
     * If the caller is not currently executing in a function, this will return an error.
     */
    public function currentFunctionCall(): FunctionCall
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('currentFunctionCall');
        return new \Dagger\FunctionCall($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * The module currently being served in the session, if any.
     */
    public function currentModule(): CurrentModule
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('currentModule');
        return new \Dagger\CurrentModule($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * The TypeDef representations of the objects currently being served in the session.
     */
    public function currentTypeDefs(): array
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('currentTypeDefs');
        return (array)$this->queryLeaf($leafQueryBuilder, 'currentTypeDefs');
    }

    /**
     * The default platform of the engine.
     */
    public function defaultPlatform(): Platform
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('defaultPlatform');
        return new \Dagger\Platform((string)$this->queryLeaf($leafQueryBuilder, 'defaultPlatform'));
    }

    /**
     * Creates an empty directory.
     */
    public function directory(): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('directory');
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * The Dagger engine container configuration and state
     */
    public function engine(): Engine
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('engine');
        return new \Dagger\Engine($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Creates a function.
     */
    public function function(string $name, TypeDefId|TypeDef $returnType): Function_
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('function');
        $innerQueryBuilder->setArgument('name', $name);
        $innerQueryBuilder->setArgument('returnType', $returnType);
        return new \Dagger\Function_($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Create a code generation result, given a directory containing the generated code.
     */
    public function generatedCode(DirectoryId|Directory $code): GeneratedCode
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('generatedCode');
        $innerQueryBuilder->setArgument('code', $code);
        return new \Dagger\GeneratedCode($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Queries a Git repository.
     */
    public function git(
        string $url,
        ?bool $keepGitDir = true,
        ServiceId|Service|null $experimentalServiceHost = null,
        ?string $sshKnownHosts = '',
        SocketId|Socket|null $sshAuthSocket = null,
    ): GitRepository {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('git');
        $innerQueryBuilder->setArgument('url', $url);
        if (null !== $keepGitDir) {
        $innerQueryBuilder->setArgument('keepGitDir', $keepGitDir);
        }
        if (null !== $experimentalServiceHost) {
        $innerQueryBuilder->setArgument('experimentalServiceHost', $experimentalServiceHost);
        }
        if (null !== $sshKnownHosts) {
        $innerQueryBuilder->setArgument('sshKnownHosts', $sshKnownHosts);
        }
        if (null !== $sshAuthSocket) {
        $innerQueryBuilder->setArgument('sshAuthSocket', $sshAuthSocket);
        }
        return new \Dagger\GitRepository($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Queries the host environment.
     */
    public function host(): Host
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('host');
        return new \Dagger\Host($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Returns a file containing an http remote url content.
     */
    public function http(string $url, ServiceId|Service|null $experimentalServiceHost = null): File
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('http');
        $innerQueryBuilder->setArgument('url', $url);
        if (null !== $experimentalServiceHost) {
        $innerQueryBuilder->setArgument('experimentalServiceHost', $experimentalServiceHost);
        }
        return new \Dagger\File($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a CacheVolume from its ID.
     */
    public function loadCacheVolumeFromID(CacheVolumeId|CacheVolume $id): CacheVolume
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadCacheVolumeFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\CacheVolume($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Container from its ID.
     */
    public function loadContainerFromID(ContainerId|Container $id): Container
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadContainerFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Container($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a CurrentModule from its ID.
     */
    public function loadCurrentModuleFromID(CurrentModuleId|CurrentModule $id): CurrentModule
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadCurrentModuleFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\CurrentModule($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Directory from its ID.
     */
    public function loadDirectoryFromID(DirectoryId|Directory $id): Directory
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadDirectoryFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Directory($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a EngineCacheEntry from its ID.
     */
    public function loadEngineCacheEntryFromID(EngineCacheEntryId|EngineCacheEntry $id): EngineCacheEntry
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEngineCacheEntryFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\EngineCacheEntry($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a EngineCacheEntrySet from its ID.
     */
    public function loadEngineCacheEntrySetFromID(EngineCacheEntrySetId|EngineCacheEntrySet $id): EngineCacheEntrySet
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEngineCacheEntrySetFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\EngineCacheEntrySet($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a EngineCache from its ID.
     */
    public function loadEngineCacheFromID(EngineCacheId|EngineCache $id): EngineCache
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEngineCacheFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\EngineCache($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Engine from its ID.
     */
    public function loadEngineFromID(EngineId|Engine $id): Engine
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEngineFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Engine($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a EnumTypeDef from its ID.
     */
    public function loadEnumTypeDefFromID(EnumTypeDefId|EnumTypeDef $id): EnumTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEnumTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\EnumTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a EnumValueTypeDef from its ID.
     */
    public function loadEnumValueTypeDefFromID(EnumValueTypeDefId|EnumValueTypeDef $id): EnumValueTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEnumValueTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\EnumValueTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a EnvVariable from its ID.
     */
    public function loadEnvVariableFromID(EnvVariableId|EnvVariable $id): EnvVariable
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadEnvVariableFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\EnvVariable($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a FieldTypeDef from its ID.
     */
    public function loadFieldTypeDefFromID(FieldTypeDefId|FieldTypeDef $id): FieldTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadFieldTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\FieldTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a File from its ID.
     */
    public function loadFileFromID(FileId|File $id): File
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadFileFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\File($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a FunctionArg from its ID.
     */
    public function loadFunctionArgFromID(FunctionArgId|FunctionArg $id): FunctionArg
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadFunctionArgFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\FunctionArg($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a FunctionCallArgValue from its ID.
     */
    public function loadFunctionCallArgValueFromID(
        FunctionCallArgValueId|FunctionCallArgValue $id,
    ): FunctionCallArgValue {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadFunctionCallArgValueFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\FunctionCallArgValue($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a FunctionCall from its ID.
     */
    public function loadFunctionCallFromID(FunctionCallId|FunctionCall $id): FunctionCall
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadFunctionCallFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\FunctionCall($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Function from its ID.
     */
    public function loadFunctionFromID(FunctionId|Function_ $id): Function_
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadFunctionFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Function_($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a GeneratedCode from its ID.
     */
    public function loadGeneratedCodeFromID(GeneratedCodeId|GeneratedCode $id): GeneratedCode
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadGeneratedCodeFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\GeneratedCode($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a GitModuleSource from its ID.
     */
    public function loadGitModuleSourceFromID(GitModuleSourceId|GitModuleSource $id): GitModuleSource
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadGitModuleSourceFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\GitModuleSource($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a GitRef from its ID.
     */
    public function loadGitRefFromID(GitRefId|GitRef $id): GitRef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadGitRefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\GitRef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a GitRepository from its ID.
     */
    public function loadGitRepositoryFromID(GitRepositoryId|GitRepository $id): GitRepository
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadGitRepositoryFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\GitRepository($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Host from its ID.
     */
    public function loadHostFromID(HostId|Host $id): Host
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadHostFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Host($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a InputTypeDef from its ID.
     */
    public function loadInputTypeDefFromID(InputTypeDefId|InputTypeDef $id): InputTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadInputTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\InputTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a InterfaceTypeDef from its ID.
     */
    public function loadInterfaceTypeDefFromID(InterfaceTypeDefId|InterfaceTypeDef $id): InterfaceTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadInterfaceTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\InterfaceTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Label from its ID.
     */
    public function loadLabelFromID(LabelId|Label $id): Label
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadLabelFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Label($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a ListTypeDef from its ID.
     */
    public function loadListTypeDefFromID(ListTypeDefId|ListTypeDef $id): ListTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadListTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\ListTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a LocalModuleSource from its ID.
     */
    public function loadLocalModuleSourceFromID(LocalModuleSourceId|LocalModuleSource $id): LocalModuleSource
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadLocalModuleSourceFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\LocalModuleSource($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a ModuleDependency from its ID.
     */
    public function loadModuleDependencyFromID(ModuleDependencyId|ModuleDependency $id): ModuleDependency
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadModuleDependencyFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\ModuleDependency($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Module from its ID.
     */
    public function loadModuleFromID(ModuleId|Module $id): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadModuleFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a ModuleSource from its ID.
     */
    public function loadModuleSourceFromID(ModuleSourceId|ModuleSource $id): ModuleSource
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadModuleSourceFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\ModuleSource($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a ModuleSourceView from its ID.
     */
    public function loadModuleSourceViewFromID(ModuleSourceViewId|ModuleSourceView $id): ModuleSourceView
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadModuleSourceViewFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\ModuleSourceView($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a ObjectTypeDef from its ID.
     */
    public function loadObjectTypeDefFromID(ObjectTypeDefId|ObjectTypeDef $id): ObjectTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadObjectTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\ObjectTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Port from its ID.
     */
    public function loadPortFromID(PortId|Port $id): Port
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadPortFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Port($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a ScalarTypeDef from its ID.
     */
    public function loadScalarTypeDefFromID(ScalarTypeDefId|ScalarTypeDef $id): ScalarTypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadScalarTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\ScalarTypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Secret from its ID.
     */
    public function loadSecretFromID(SecretId|Secret $id): Secret
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadSecretFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Secret($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Service from its ID.
     */
    public function loadServiceFromID(ServiceId|Service $id): Service
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadServiceFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Service($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Socket from its ID.
     */
    public function loadSocketFromID(SocketId|Socket $id): Socket
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadSocketFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Socket($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a SourceMap from its ID.
     */
    public function loadSourceMapFromID(SourceMapId|SourceMap $id): SourceMap
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadSourceMapFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\SourceMap($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a Terminal from its ID.
     */
    public function loadTerminalFromID(TerminalId|Terminal $id): Terminal
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadTerminalFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\Terminal($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Load a TypeDef from its ID.
     */
    public function loadTypeDefFromID(TypeDefId|TypeDef $id): TypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('loadTypeDefFromID');
        $innerQueryBuilder->setArgument('id', $id);
        return new \Dagger\TypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Create a new module.
     */
    public function module(): Module
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('module');
        return new \Dagger\Module($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Create a new module dependency configuration from a module source and name
     */
    public function moduleDependency(ModuleSourceId|ModuleSource $source, ?string $name = ''): ModuleDependency
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('moduleDependency');
        $innerQueryBuilder->setArgument('source', $source);
        if (null !== $name) {
        $innerQueryBuilder->setArgument('name', $name);
        }
        return new \Dagger\ModuleDependency($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Create a new module source instance from a source ref string.
     */
    public function moduleSource(
        string $refString,
        ?string $refPin = '',
        ?bool $stable = false,
        ?string $relHostPath = '',
    ): ModuleSource {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('moduleSource');
        $innerQueryBuilder->setArgument('refString', $refString);
        if (null !== $refPin) {
        $innerQueryBuilder->setArgument('refPin', $refPin);
        }
        if (null !== $stable) {
        $innerQueryBuilder->setArgument('stable', $stable);
        }
        if (null !== $relHostPath) {
        $innerQueryBuilder->setArgument('relHostPath', $relHostPath);
        }
        return new \Dagger\ModuleSource($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Reference a secret by name.
     */
    public function secret(string $name, ?string $accessor = null): Secret
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('secret');
        $innerQueryBuilder->setArgument('name', $name);
        if (null !== $accessor) {
        $innerQueryBuilder->setArgument('accessor', $accessor);
        }
        return new \Dagger\Secret($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Sets a secret given a user defined name to its plaintext and returns the secret.
     *
     * The plaintext value is limited to a size of 128000 bytes.
     */
    public function setSecret(string $name, string $plaintext): Secret
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('setSecret');
        $innerQueryBuilder->setArgument('name', $name);
        $innerQueryBuilder->setArgument('plaintext', $plaintext);
        return new \Dagger\Secret($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Creates source map metadata.
     */
    public function sourceMap(string $filename, int $line, int $column): SourceMap
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('sourceMap');
        $innerQueryBuilder->setArgument('filename', $filename);
        $innerQueryBuilder->setArgument('line', $line);
        $innerQueryBuilder->setArgument('column', $column);
        return new \Dagger\SourceMap($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Create a new TypeDef.
     */
    public function typeDef(): TypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\QueryBuilder('typeDef');
        return new \Dagger\TypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }

    /**
     * Get the current Dagger Engine version.
     */
    public function version(): string
    {
        $leafQueryBuilder = new \Dagger\Client\QueryBuilder('version');
        return (string)$this->queryLeaf($leafQueryBuilder, 'version');
    }
}