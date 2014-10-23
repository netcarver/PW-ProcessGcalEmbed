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
                    '7' => $this->_('Saturday'),
                ),
                'value'       => '1',
            ),
        ));
    }
}
