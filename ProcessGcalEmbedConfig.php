<?php

class ProcessGcalEmbedConfig extends ModuleConfig
{

    public function tz_options()
    {
        $tz     = date_default_timezone_get();
        $all_tz = timezone_identifiers_list();
        $tzs    = array();
        foreach ($all_tz as &$zone) {
            $tzs[$zone] = $zone;
        }

        return $tzs;
    }


    public function __construct()
    {
        $this->add(array(
            array(
                'name'        => 'src_email',
                'label'       => 'Google Calendar Email Addresses',
                'type'        => 'textarea',
                'required'    => true,
                'description' => $this->_("Email address of the google calendars to embed. One email address per line, please."),
                'value'       => 'en.uk#holiday@group.v.calendar.google.com',
            ),
            array(
                'name'        => 'width',
                'type'        => 'integer',
                'label'       => 'Width',
                'columnWidth' => 25,
                'value'       => 800,
                'description' => $this->_("(in Pixels)"),
            ),
            array(
                'name'        => 'height',
                'type'        => 'integer',
                'label'       => 'Height',
                'columnWidth' => 25,
                'value'       => 600,
                'description' => $this->_("(in Pixels)"),
            ),
            array(
                'name'        => 'tz',
                'type'        => 'select',
                'label'       => $this->_('Timezone to use for display of the calendar (defaults to PHPs current TZ.)'),
                'options'     => $this->tz_options(),
                'columnWidth' => 50,
                'value'       => date_default_timezone_get(),
            ),
            array(
                'name'        => 'start_dow',
                'type'        => 'select',
                'label'       => $this->_('Which day should start a week?'),
                'options'     => array(
                    '1' => $this->_('Sunday'),
                    '2' => $this->_('Monday'),
                    //'3' => $this->_('Tuesday'),
                    //'4' => $this->_('Wednesday'),
                    //'5' => $this->_('Thursday'),
                    //'6' => $this->_('Friday'),
                    '7' => $this->_('Saturday'),
                ),
                'value'       => '1',
            ),
        ));
    }

    /* $f = $this->modules->get('InputfieldRadios'); */
    /* $f->attr('name', 'attendee_link'); */
    /* $f->label = $this->_('Should attendee names link through to the underlying pages?'); */
    /* $f->addOption('0', $this->_('No, just display their name.')); */
    /* $f->addOption('1', $this->_('Yes, make the name a link to their page.')); */
    /* $fieldset1->add($f); */

    /* // Add the attendee fieldset to the fields... */
    /* $fields->add($fieldset1); */


    /* $fieldset2 = $this->modules->get('InputfieldFieldset'); */
    /* $fieldset2->label = $this->_("Slot Setup"); */
    /* $fieldset2->name  = 'slot_setup'; */

    /* $f = $this->modules->get('InputfieldSelect'); */
    /* $f->attr('name', 'slot_template'); */
    /* $f->label = $this->_('Slot Template'); */
    /* $f->required = true; */
    /* $f->description = $this->_("Which template represents WHEN & WHAT will be open for attendance? It is recommended that you create a specific template for slots, rather than using a generic template."); */
    /* $f->options = $toptions; */
    /* $f->columnWidth = 50; */
    /* $fieldset2->add($f); */

    /* $f = $this->modules->get('InputfieldText'); */
    /* $f->attr('name', 'slot_title'); */
    /* $f->label = $this->_('Slot Title'); */
    /* $f->required = true; */
    /* $f->description = $this->_("How should slots be referred to in attendance tabs?"); */
    /* $f->columnWidth = 50; */
    /* $fieldset2->add($f); */

    /* $f = $this->modules->get('InputfieldSelect'); */
    /* $f->attr('name', 'start_field'); */
    /* $f->label = $this->_('Start Time Field'); */
    /* $f->required = true; */
    /* $f->description = $this->_("Which field within the slot template represents the start time of the slot?"); */
    /* $f->options = $start_options; */
    /* $f->columnWidth = 50; */
    /* $fieldset2->add($f); */

    /* $f = $this->modules->get('InputfieldSelect'); */
    /* $f->attr('name', 'end_field'); */
    /* $f->label = $this->_('End Time Field'); */
    /* $f->required = true; */
    /* $f->description = $this->_("Which field within the slot template represents the end time of the slot?"); */
    /* $f->options = $end_options; */
    /* $f->columnWidth = 50; */
    /* $fieldset2->add($f); */

    /* $f = $this->modules->get('InputfieldSelect'); */
    /* $f->attr('name', 'dow_field'); */
    /* $f->label = $this->_('Day Of Week Field'); */
    /* $f->required = true; */
    /* $f->description = $this->_("Which field represents the day of the week of the slot? This has to be a Page field and each page representing a day of the week must have an integer field named 'day_number' where 0 represents a Sunday, 1 Monday through to 6 for Saturday."); */
    /* $f->options = $dow_options; */
    /* //$f->columnWidth = 50; */
    /* $fieldset2->add($f); */

    /* $f = $this->modules->get('InputfieldSelect'); */
    /* $f->attr('name', 'sort_field'); */
    /* $f->label = $this->_('Sort Field'); */
    /* $f->required = true; */
    /* $f->description = $this->_("Which field should be used to sort results?"); */
    /* $f->options = $sort_options; */
    /* //$f->columnWidth = 50; */
    /* $fieldset2->add($f); */

    /* $f = $this->modules->get('InputfieldRadios'); */
    /* $f->attr('name', 'slot_link'); */
    /* $f->label = $this->_('Should slots link through to their underlying pages?'); */
    /* $f->addOption('0', $this->_('No, just display their name.')); */
    /* $f->addOption('1', $this->_('Yes, make the slot name link to its page.')); */
    /* $fieldset2->add($f); */

    /* /** */
    /*  * Add the setup for slots. */
    /*  *1/ */
    /* $fields->add($fieldset2); */


    /* /** */
    /*  * Other settings. */
    /*  *1/ */
    /* $f = $this->modules->get('InputfieldRadios'); */
    /* $f->attr('name', 'debug'); */
    /* $f->label = $this->_('Debug mode.'); */
    /* $f->addOption('0', $this->_('Off.')); */
    /* $f->addOption('1', $this->_('On. Shows underlying page ids and issues other messages on the admin side.')); */
    /* $fields->add($f); */

}
