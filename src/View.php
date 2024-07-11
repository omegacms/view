<?php
/**
 * Part of Omega CMS - View Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @namespace
 */
namespace Omega\View;

/**
 * @use
 */
use Omega\View\Engine\EngineInterface;

/**
 * View class.
 *
 * The `View` class represents a view object in the Omega system. Instances of
 * this class are used to handle view rendering using a rendering engine that
 * implements the RendererInterface.
 *
 * @category    Omega
 * @package     Omega\View
 * @subpackage  Omega\View\Engine
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class View
{
    /**
     * View class constructor.
     *
     * @param  RendererInterface $renderer Holds an instance of Renderer.
     * @param  string            $path     Holds the view path
     * @param  array             $data     Holds an array of date for rendering the view.
     */
    public function __construct( protected EngineInterface $engine, public string $path, public array $data = [] )
    {
    }

    /**
     * Magic to string.
     *
     * @return string Return the renderer view.
     */
    public function __toString() : string
    {
        return $this->engine->render( $this );
    }
}
