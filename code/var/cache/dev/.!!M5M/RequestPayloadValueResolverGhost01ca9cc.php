<?php

namespace ContainerBOkz1xM;
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/RequestPayloadValueResolver.php';

class RequestPayloadValueResolverGhost01ca9cc extends \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'serializer' => [parent::class, 'serializer', null, 530],
        "\0".parent::class."\0".'translationDomain' => [parent::class, 'translationDomain', null, 16],
        "\0".parent::class."\0".'translator' => [parent::class, 'translator', null, 530],
        "\0".parent::class."\0".'validator' => [parent::class, 'validator', null, 530],
        'serializer' => [parent::class, 'serializer', null, 530],
        'translationDomain' => [parent::class, 'translationDomain', null, 16],
        'translator' => [parent::class, 'translator', null, 530],
        'validator' => [parent::class, 'validator', null, 530],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('RequestPayloadValueResolverGhost01ca9cc', false)) {
    \class_alias(__NAMESPACE__.'\\RequestPayloadValueResolverGhost01ca9cc', 'RequestPayloadValueResolverGhost01ca9cc', false);
}
