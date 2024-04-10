<?php
/**
 * V2TicksStocksTradesTickerDateGet200ResponseAllOfResultsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Polygon API
 *
 * The future of fintech.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * V2TicksStocksTradesTickerDateGet200ResponseAllOfResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V2TicksStocksTradesTickerDateGet200ResponseAllOfResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v2_ticks_stocks_trades__ticker___date__get_200_response_allOf_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        't' => 'string',
        'f' => 'int',
        'q' => 'int',
        't' => 'int',
        'y' => 'int',
        'c' => 'int[]',
        'e' => 'int',
        'i' => 'string',
        'p' => 'float',
        'r' => 'int',
        's' => 'float',
        'x' => 'int',
        'z' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        't' => null,
        'f' => null,
        'q' => 'int64',
        't' => null,
        'y' => null,
        'c' => null,
        'e' => null,
        'i' => null,
        'p' => 'double',
        'r' => null,
        's' => 'double',
        'x' => null,
        'z' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        't' => false,
        'f' => false,
        'q' => false,
        't' => false,
        'y' => false,
        'c' => false,
        'e' => false,
        'i' => false,
        'p' => false,
        'r' => false,
        's' => false,
        'x' => false,
        'z' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        't' => 'T',
        'f' => 'f',
        'q' => 'q',
        't' => 't',
        'y' => 'y',
        'c' => 'c',
        'e' => 'e',
        'i' => 'i',
        'p' => 'p',
        'r' => 'r',
        's' => 's',
        'x' => 'x',
        'z' => 'z'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        't' => 'setT',
        'f' => 'setF',
        'q' => 'setQ',
        't' => 'setT',
        'y' => 'setY',
        'c' => 'setC',
        'e' => 'setE',
        'i' => 'setI',
        'p' => 'setP',
        'r' => 'setR',
        's' => 'setS',
        'x' => 'setX',
        'z' => 'setZ'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        't' => 'getT',
        'f' => 'getF',
        'q' => 'getQ',
        't' => 'getT',
        'y' => 'getY',
        'c' => 'getC',
        'e' => 'getE',
        'i' => 'getI',
        'p' => 'getP',
        'r' => 'getR',
        's' => 'getS',
        'x' => 'getX',
        'z' => 'getZ'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('f', $data ?? [], null);
        $this->setIfExists('q', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('y', $data ?? [], null);
        $this->setIfExists('c', $data ?? [], null);
        $this->setIfExists('e', $data ?? [], null);
        $this->setIfExists('i', $data ?? [], null);
        $this->setIfExists('p', $data ?? [], null);
        $this->setIfExists('r', $data ?? [], null);
        $this->setIfExists('s', $data ?? [], null);
        $this->setIfExists('x', $data ?? [], null);
        $this->setIfExists('z', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['t'] === null) {
            $invalidProperties[] = "'t' can't be null";
        }
        if ($this->container['f'] === null) {
            $invalidProperties[] = "'f' can't be null";
        }
        if ($this->container['q'] === null) {
            $invalidProperties[] = "'q' can't be null";
        }
        if ($this->container['t'] === null) {
            $invalidProperties[] = "'t' can't be null";
        }
        if ($this->container['y'] === null) {
            $invalidProperties[] = "'y' can't be null";
        }
        if ($this->container['c'] === null) {
            $invalidProperties[] = "'c' can't be null";
        }
        if ($this->container['e'] === null) {
            $invalidProperties[] = "'e' can't be null";
        }
        if ($this->container['i'] === null) {
            $invalidProperties[] = "'i' can't be null";
        }
        if ($this->container['p'] === null) {
            $invalidProperties[] = "'p' can't be null";
        }
        if ($this->container['r'] === null) {
            $invalidProperties[] = "'r' can't be null";
        }
        if ($this->container['s'] === null) {
            $invalidProperties[] = "'s' can't be null";
        }
        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['z'] === null) {
            $invalidProperties[] = "'z' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets t
     *
     * @return string
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param string $t The exchange symbol that this item is traded under.
     *
     * @return self
     */
    public function setT($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets f
     *
     * @return int
     */
    public function getF()
    {
        return $this->container['f'];
    }

    /**
     * Sets f
     *
     * @param int $f The nanosecond accuracy TRF(Trade Reporting Facility) Unix Timestamp. This is the timestamp of when the trade reporting facility received this message.
     *
     * @return self
     */
    public function setF($f)
    {
        if (is_null($f)) {
            throw new \InvalidArgumentException('non-nullable f cannot be null');
        }
        $this->container['f'] = $f;

        return $this;
    }

    /**
     * Gets q
     *
     * @return int
     */
    public function getQ()
    {
        return $this->container['q'];
    }

    /**
     * Sets q
     *
     * @param int $q The sequence number represents the sequence in which message events happened. These are increasing and unique per ticker symbol, but will not always be sequential (e.g., 1, 2, 6, 9, 10, 11).
     *
     * @return self
     */
    public function setQ($q)
    {
        if (is_null($q)) {
            throw new \InvalidArgumentException('non-nullable q cannot be null');
        }
        $this->container['q'] = $q;

        return $this;
    }

    /**
     * Gets t
     *
     * @return int
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param int $t The nanosecond accuracy SIP Unix Timestamp. This is the timestamp of when the SIP received this message from the exchange which produced it.
     *
     * @return self
     */
    public function setT($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets y
     *
     * @return int
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param int $y The nanosecond accuracy Participant/Exchange Unix Timestamp. This is the timestamp of when the quote was actually generated at the exchange.
     *
     * @return self
     */
    public function setY($y)
    {
        if (is_null($y)) {
            throw new \InvalidArgumentException('non-nullable y cannot be null');
        }
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets c
     *
     * @return int[]
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     *
     * @param int[] $c A list of condition codes.
     *
     * @return self
     */
    public function setC($c)
    {
        if (is_null($c)) {
            throw new \InvalidArgumentException('non-nullable c cannot be null');
        }
        $this->container['c'] = $c;

        return $this;
    }

    /**
     * Gets e
     *
     * @return int
     */
    public function getE()
    {
        return $this->container['e'];
    }

    /**
     * Sets e
     *
     * @param int $e The trade correction indicator.
     *
     * @return self
     */
    public function setE($e)
    {
        if (is_null($e)) {
            throw new \InvalidArgumentException('non-nullable e cannot be null');
        }
        $this->container['e'] = $e;

        return $this;
    }

    /**
     * Gets i
     *
     * @return string
     */
    public function getI()
    {
        return $this->container['i'];
    }

    /**
     * Sets i
     *
     * @param string $i The Trade ID which uniquely identifies a trade. These are unique per combination of ticker, exchange, and TRF. For example: A trade for AAPL executed on NYSE and a trade for AAPL executed on NASDAQ could potentially have the same Trade ID.
     *
     * @return self
     */
    public function setI($i)
    {
        if (is_null($i)) {
            throw new \InvalidArgumentException('non-nullable i cannot be null');
        }
        $this->container['i'] = $i;

        return $this;
    }

    /**
     * Gets p
     *
     * @return float
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param float $p The price of the trade. This is the actual dollar value per whole share of this trade. A trade of 100 shares with a price of $2.00 would be worth a total dollar value of $200.00.
     *
     * @return self
     */
    public function setP($p)
    {
        if (is_null($p)) {
            throw new \InvalidArgumentException('non-nullable p cannot be null');
        }
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets r
     *
     * @return int
     */
    public function getR()
    {
        return $this->container['r'];
    }

    /**
     * Sets r
     *
     * @param int $r The ID for the Trade Reporting Facility where the trade took place.
     *
     * @return self
     */
    public function setR($r)
    {
        if (is_null($r)) {
            throw new \InvalidArgumentException('non-nullable r cannot be null');
        }
        $this->container['r'] = $r;

        return $this;
    }

    /**
     * Gets s
     *
     * @return float
     */
    public function getS()
    {
        return $this->container['s'];
    }

    /**
     * Sets s
     *
     * @param float $s The size of a trade (also known as volume).
     *
     * @return self
     */
    public function setS($s)
    {
        if (is_null($s)) {
            throw new \InvalidArgumentException('non-nullable s cannot be null');
        }
        $this->container['s'] = $s;

        return $this;
    }

    /**
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x The exchange ID. See <a href=\"https://polygon.io/docs/stocks/get_v3_reference_exchanges\" alt=\"Exchanges\">Exchanges</a> for Polygon.io's mapping of exchange IDs.
     *
     * @return self
     */
    public function setX($x)
    {
        if (is_null($x)) {
            throw new \InvalidArgumentException('non-nullable x cannot be null');
        }
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets z
     *
     * @return int
     */
    public function getZ()
    {
        return $this->container['z'];
    }

    /**
     * Sets z
     *
     * @param int $z There are 3 tapes which define which exchange the ticker is listed on. These are integers in our objects which represent the letter of the alphabet. Eg: 1 = A, 2 = B, 3 = C. * Tape A is NYSE listed securities * Tape B is NYSE ARCA / NYSE American * Tape C is NASDAQ
     *
     * @return self
     */
    public function setZ($z)
    {
        if (is_null($z)) {
            throw new \InvalidArgumentException('non-nullable z cannot be null');
        }
        $this->container['z'] = $z;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


