<?php
/**
 * Section
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Clever
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Data API
 *
 * Serves the Clever Data API
 *
 * The version of the OpenAPI document: 2.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Clever\Model;

use \ArrayAccess;
use \Clever\ObjectSerializer;

/**
 * Section Class Doc Comment
 *
 * @category Class
 * @package  Clever
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Section implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Section';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'course' => 'string',
        'created' => 'string',
        'district' => 'string',
        'grade' => 'string',
        'last_modified' => 'string',
        'name' => 'string',
        'period' => 'string',
        'school' => 'string',
        'section_number' => 'string',
        'sis_id' => 'string',
        'students' => 'string[]',
        'subject' => 'string',
        'teacher' => 'string',
        'teachers' => 'string[]',
        'term_id' => 'string',
        'ext' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'course' => null,
        'created' => 'datetime',
        'district' => null,
        'grade' => null,
        'last_modified' => 'datetime',
        'name' => null,
        'period' => null,
        'school' => null,
        'section_number' => null,
        'sis_id' => null,
        'students' => null,
        'subject' => null,
        'teacher' => null,
        'teachers' => null,
        'term_id' => null,
        'ext' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'course' => true,
		'created' => false,
		'district' => false,
		'grade' => true,
		'last_modified' => false,
		'name' => false,
		'period' => true,
		'school' => false,
		'section_number' => true,
		'sis_id' => false,
		'students' => false,
		'subject' => true,
		'teacher' => true,
		'teachers' => false,
		'term_id' => true,
		'ext' => false
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
        'id' => 'id',
        'course' => 'course',
        'created' => 'created',
        'district' => 'district',
        'grade' => 'grade',
        'last_modified' => 'last_modified',
        'name' => 'name',
        'period' => 'period',
        'school' => 'school',
        'section_number' => 'section_number',
        'sis_id' => 'sis_id',
        'students' => 'students',
        'subject' => 'subject',
        'teacher' => 'teacher',
        'teachers' => 'teachers',
        'term_id' => 'term_id',
        'ext' => 'ext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'course' => 'setCourse',
        'created' => 'setCreated',
        'district' => 'setDistrict',
        'grade' => 'setGrade',
        'last_modified' => 'setLastModified',
        'name' => 'setName',
        'period' => 'setPeriod',
        'school' => 'setSchool',
        'section_number' => 'setSectionNumber',
        'sis_id' => 'setSisId',
        'students' => 'setStudents',
        'subject' => 'setSubject',
        'teacher' => 'setTeacher',
        'teachers' => 'setTeachers',
        'term_id' => 'setTermId',
        'ext' => 'setExt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'course' => 'getCourse',
        'created' => 'getCreated',
        'district' => 'getDistrict',
        'grade' => 'getGrade',
        'last_modified' => 'getLastModified',
        'name' => 'getName',
        'period' => 'getPeriod',
        'school' => 'getSchool',
        'section_number' => 'getSectionNumber',
        'sis_id' => 'getSisId',
        'students' => 'getStudents',
        'subject' => 'getSubject',
        'teacher' => 'getTeacher',
        'teachers' => 'getTeachers',
        'term_id' => 'getTermId',
        'ext' => 'getExt'
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

    public const GRADE_INFANT_TODDLER = 'InfantToddler';
    public const GRADE_PRESCHOOL = 'Preschool';
    public const GRADE_PRE_KINDERGARTEN = 'PreKindergarten';
    public const GRADE_TRANSITIONAL_KINDERGARTEN = 'TransitionalKindergarten';
    public const GRADE_KINDERGARTEN = 'Kindergarten';
    public const GRADE__1 = '1';
    public const GRADE__2 = '2';
    public const GRADE__3 = '3';
    public const GRADE__4 = '4';
    public const GRADE__5 = '5';
    public const GRADE__6 = '6';
    public const GRADE__7 = '7';
    public const GRADE__8 = '8';
    public const GRADE__9 = '9';
    public const GRADE__10 = '10';
    public const GRADE__11 = '11';
    public const GRADE__12 = '12';
    public const GRADE__13 = '13';
    public const GRADE_POST_GRADUATE = 'PostGraduate';
    public const GRADE_UNGRADED = 'Ungraded';
    public const GRADE_OTHER = 'Other';
    public const GRADE_EMPTY = '';
    public const SUBJECT_ENGLISH_LANGUAGE_ARTS = 'english/language arts';
    public const SUBJECT_MATH = 'math';
    public const SUBJECT_SCIENCE = 'science';
    public const SUBJECT_SOCIAL_STUDIES = 'social studies';
    public const SUBJECT_LANGUAGE = 'language';
    public const SUBJECT_HOMEROOM_ADVISORY = 'homeroom/advisory';
    public const SUBJECT_INTERVENTIONS_ONLINE_LEARNING = 'interventions/online learning';
    public const SUBJECT_TECHNOLOGY_AND_ENGINEERING = 'technology and engineering';
    public const SUBJECT_PE_AND_HEALTH = 'PE and health';
    public const SUBJECT_ARTS_AND_MUSIC = 'arts and music';
    public const SUBJECT_OTHER = 'other';
    public const SUBJECT_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGradeAllowableValues()
    {
        return [
            self::GRADE_INFANT_TODDLER,
            self::GRADE_PRESCHOOL,
            self::GRADE_PRE_KINDERGARTEN,
            self::GRADE_TRANSITIONAL_KINDERGARTEN,
            self::GRADE_KINDERGARTEN,
            self::GRADE__1,
            self::GRADE__2,
            self::GRADE__3,
            self::GRADE__4,
            self::GRADE__5,
            self::GRADE__6,
            self::GRADE__7,
            self::GRADE__8,
            self::GRADE__9,
            self::GRADE__10,
            self::GRADE__11,
            self::GRADE__12,
            self::GRADE__13,
            self::GRADE_POST_GRADUATE,
            self::GRADE_UNGRADED,
            self::GRADE_OTHER,
            self::GRADE_EMPTY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubjectAllowableValues()
    {
        return [
            self::SUBJECT_ENGLISH_LANGUAGE_ARTS,
            self::SUBJECT_MATH,
            self::SUBJECT_SCIENCE,
            self::SUBJECT_SOCIAL_STUDIES,
            self::SUBJECT_LANGUAGE,
            self::SUBJECT_HOMEROOM_ADVISORY,
            self::SUBJECT_INTERVENTIONS_ONLINE_LEARNING,
            self::SUBJECT_TECHNOLOGY_AND_ENGINEERING,
            self::SUBJECT_PE_AND_HEALTH,
            self::SUBJECT_ARTS_AND_MUSIC,
            self::SUBJECT_OTHER,
            self::SUBJECT_EMPTY,
        ];
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('course', $data ?? [], null);
        $this->setIfExists('created', $data ?? [], null);
        $this->setIfExists('district', $data ?? [], null);
        $this->setIfExists('grade', $data ?? [], null);
        $this->setIfExists('last_modified', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('school', $data ?? [], null);
        $this->setIfExists('section_number', $data ?? [], null);
        $this->setIfExists('sis_id', $data ?? [], null);
        $this->setIfExists('students', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('teacher', $data ?? [], null);
        $this->setIfExists('teachers', $data ?? [], null);
        $this->setIfExists('term_id', $data ?? [], null);
        $this->setIfExists('ext', $data ?? [], null);
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

        $allowedValues = $this->getGradeAllowableValues();
        if (!is_null($this->container['grade']) && !in_array($this->container['grade'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'grade', must be one of '%s'",
                $this->container['grade'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubjectAllowableValues();
        if (!is_null($this->container['subject']) && !in_array($this->container['subject'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'subject', must be one of '%s'",
                $this->container['subject'],
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets course
     *
     * @return string|null
     */
    public function getCourse()
    {
        return $this->container['course'];
    }

    /**
     * Sets course
     *
     * @param string|null $course course
     *
     * @return self
     */
    public function setCourse($course)
    {
        if (is_null($course)) {
            array_push($this->openAPINullablesSetToNull, 'course');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('course', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['course'] = $course;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created created
     *
     * @return self
     */
    public function setCreated($created)
    {
        if (is_null($created)) {
            throw new \InvalidArgumentException('non-nullable created cannot be null');
        }
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string|null
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string|null $district district
     *
     * @return self
     */
    public function setDistrict($district)
    {
        if (is_null($district)) {
            throw new \InvalidArgumentException('non-nullable district cannot be null');
        }
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets grade
     *
     * @return string|null
     */
    public function getGrade()
    {
        return $this->container['grade'];
    }

    /**
     * Sets grade
     *
     * @param string|null $grade grade
     *
     * @return self
     */
    public function setGrade($grade)
    {
        if (is_null($grade)) {
            array_push($this->openAPINullablesSetToNull, 'grade');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('grade', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getGradeAllowableValues();
        if (!is_null($grade) && !in_array($grade, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'grade', must be one of '%s'",
                    $grade,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['grade'] = $grade;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string|null $last_modified last_modified
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        if (is_null($last_modified)) {
            throw new \InvalidArgumentException('non-nullable last_modified cannot be null');
        }
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period period
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            array_push($this->openAPINullablesSetToNull, 'period');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('period', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets school
     *
     * @return string|null
     */
    public function getSchool()
    {
        return $this->container['school'];
    }

    /**
     * Sets school
     *
     * @param string|null $school school
     *
     * @return self
     */
    public function setSchool($school)
    {
        if (is_null($school)) {
            throw new \InvalidArgumentException('non-nullable school cannot be null');
        }
        $this->container['school'] = $school;

        return $this;
    }

    /**
     * Gets section_number
     *
     * @return string|null
     */
    public function getSectionNumber()
    {
        return $this->container['section_number'];
    }

    /**
     * Sets section_number
     *
     * @param string|null $section_number section_number
     *
     * @return self
     */
    public function setSectionNumber($section_number)
    {
        if (is_null($section_number)) {
            array_push($this->openAPINullablesSetToNull, 'section_number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('section_number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['section_number'] = $section_number;

        return $this;
    }

    /**
     * Gets sis_id
     *
     * @return string|null
     */
    public function getSisId()
    {
        return $this->container['sis_id'];
    }

    /**
     * Sets sis_id
     *
     * @param string|null $sis_id sis_id
     *
     * @return self
     */
    public function setSisId($sis_id)
    {
        if (is_null($sis_id)) {
            throw new \InvalidArgumentException('non-nullable sis_id cannot be null');
        }
        $this->container['sis_id'] = $sis_id;

        return $this;
    }

    /**
     * Gets students
     *
     * @return string[]|null
     */
    public function getStudents()
    {
        return $this->container['students'];
    }

    /**
     * Sets students
     *
     * @param string[]|null $students students
     *
     * @return self
     */
    public function setStudents($students)
    {
        if (is_null($students)) {
            throw new \InvalidArgumentException('non-nullable students cannot be null');
        }
        $this->container['students'] = $students;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            array_push($this->openAPINullablesSetToNull, 'subject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('subject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSubjectAllowableValues();
        if (!is_null($subject) && !in_array($subject, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'subject', must be one of '%s'",
                    $subject,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets teacher
     *
     * @return string|null
     */
    public function getTeacher()
    {
        return $this->container['teacher'];
    }

    /**
     * Sets teacher
     *
     * @param string|null $teacher teacher
     *
     * @return self
     */
    public function setTeacher($teacher)
    {
        if (is_null($teacher)) {
            array_push($this->openAPINullablesSetToNull, 'teacher');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('teacher', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['teacher'] = $teacher;

        return $this;
    }

    /**
     * Gets teachers
     *
     * @return string[]|null
     */
    public function getTeachers()
    {
        return $this->container['teachers'];
    }

    /**
     * Sets teachers
     *
     * @param string[]|null $teachers teachers
     *
     * @return self
     */
    public function setTeachers($teachers)
    {
        if (is_null($teachers)) {
            throw new \InvalidArgumentException('non-nullable teachers cannot be null');
        }
        $this->container['teachers'] = $teachers;

        return $this;
    }

    /**
     * Gets term_id
     *
     * @return string|null
     */
    public function getTermId()
    {
        return $this->container['term_id'];
    }

    /**
     * Sets term_id
     *
     * @param string|null $term_id term_id
     *
     * @return self
     */
    public function setTermId($term_id)
    {
        if (is_null($term_id)) {
            array_push($this->openAPINullablesSetToNull, 'term_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('term_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['term_id'] = $term_id;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return object|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param object|null $ext ext
     *
     * @return self
     */
    public function setExt($ext)
    {
        if (is_null($ext)) {
            throw new \InvalidArgumentException('non-nullable ext cannot be null');
        }
        $this->container['ext'] = $ext;

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


