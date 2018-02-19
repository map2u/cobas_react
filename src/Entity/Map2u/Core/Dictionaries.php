<?php

namespace App\Entity\Map2u\Core;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dictionaries
 *
 * @ORM\Table(name="dictionaries")
 * @ORM\Entity
 */
class Dictionaries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="guid", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=20, nullable=true)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="column_name", type="string", length=30, nullable=true)
     */
    private $columnName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="data_type", type="string", length=40, nullable=true)
     */
    private $dataType;

    public function getId() {
        return $this->id;
    }

    public function getTableName() {
        return $this->tableName;
    }

    public function getColumnName() {
        return $this->columnName;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDataType() {
        return $this->dataType;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTableName($tableName) {
        $this->tableName = $tableName;
    }

    public function setColumnName($columnName) {
        $this->columnName = $columnName;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setDataType($dataType) {
        $this->dataType = $dataType;
    }


}
