<?php
/**
 * Created by PhpStorm.
 * User: janhenkes
 * Date: 20/08/2018
 * Time: 14:06
 */

namespace Teamleader;

use Teamleader\Entities\Company;
use Teamleader\Entities\Contact;
use Teamleader\Entities\Deal;
use Teamleader\Entities\DealPhase;
use Teamleader\Entities\DealSource;

class Client {
    /**
     * The HTTP connection
     *
     * @var Connection
     */
    protected $connection;

    /**
     * Client constructor.
     *
     * @param Connection $connection
     */
    public function __construct( Connection $connection ) {
        $this->connection = $connection;
    }

    public function company( $attributes = [] ) {
        return new Company( $this->connection, $attributes );
    }

    public function contact( $attributes = [] ) {
        return new Contact( $this->connection, $attributes );
    }

    public function deal( $attributes = [] ) {
        return new Deal( $this->connection, $attributes );
    }

    public function dealPhase( $attributes = [] ) {
        return new DealPhase( $this->connection, $attributes );
    }

    public function dealSource( $attributes = [] ) {
        return new DealSource( $this->connection, $attributes );
    }
}