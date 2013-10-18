<?php

/**
 * Description of DbTest
 *
 * @author chenli
 */
class DbTest extends CTestCase {

  public function testConnection() {
    $this->assertNotNull(Yii::app()->db->connectionString);
  }

}

?>
