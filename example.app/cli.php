<?php

return array(
    'application' => array(
        'description' => 'The desc of application
Application library description. This is the multi lined long version.
An other line.
And an another.',
        'commands' => array(
            'generate-schema' => array(
                'description' => "Generates database schema.

Iterates on all classes named Record_*, instantiates each one and creates database schema for them.",
                'arguments' => array(
                    '--library' => array(
                        'alias' => '-m',
                        'parameter' => '<library name>',
                        'descr' => 'Database schema will be generated for classes in library <library name>',
                        'required' => false
                    ),
                    '--forced' => array(
                        'alias' => '-f',
                        'parameter' => NULL,
                        'descr' => 'Tables will be dropped before creation'
                    )
                ),
                'callback' => array('SimpleDB_Schema_Generator', 'generate_schema')
            ),
	'another-command' => array(
		'desc' => 'Test command

			more lined test desc
			yeah yeah, really',
		'callback' => array('application_callback_gen', 'another-command')
		)
        )
    )
);

