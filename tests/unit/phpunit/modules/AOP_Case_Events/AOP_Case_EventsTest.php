<?php

use SuiteCRM\Test\SuitePHPUnitFrameworkTestCase;

class AOP_Case_EventsTest extends SuitePHPUnitFrameworkTestCase
{
    public function testAOP_Case_Events()
    {
        // Execute the constructor and check for the Object type and type attribute
        $aopCaseEvents = BeanFactory::newBean('AOP_Case_Events');
        $this->assertInstanceOf('AOP_Case_Events', $aopCaseEvents);
        $this->assertInstanceOf('Basic', $aopCaseEvents);
        $this->assertInstanceOf('SugarBean', $aopCaseEvents);

        $this->assertAttributeEquals('AOP_Case_Events', 'module_dir', $aopCaseEvents);
        $this->assertAttributeEquals('AOP_Case_Events', 'object_name', $aopCaseEvents);
        $this->assertAttributeEquals('aop_case_events', 'table_name', $aopCaseEvents);
        $this->assertAttributeEquals(true, 'new_schema', $aopCaseEvents);
        $this->assertAttributeEquals(true, 'disable_row_level_security', $aopCaseEvents);
        $this->assertAttributeEquals(false, 'importable', $aopCaseEvents);
        $this->assertAttributeEquals(false, 'tracker_visibility', $aopCaseEvents);
    }
}
