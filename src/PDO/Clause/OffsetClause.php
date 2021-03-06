<?php
/**
 * @license MIT
 * @license http://opensource.org/licenses/MIT
 */
namespace Slim\PDO\Clause;

/**
 * Class OffsetClause
 *
 * @package Slim\PDO\Clause
 * @author Fabian de Laender <fabian@faapz.nl>
 */
class OffsetClause extends ClauseContainer
{
    /**
     * @var null
     */
    private $offset = null;

    /**
     * @param $number
     */
    public function offset( $number )
    {
        if( is_int( $number ) && $number >= 0 )
        {
            $this->offset = intval( $number );
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if( $this->offset === null )
        {
            return '';
        }

        return ' OFFSET ' . $this->offset;
    }
}
