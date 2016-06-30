<?php

class qa_tag_set_restriction_admin {

	function option_default($option) {
		switch($option) {
			case 'q2a_tag_set_restriction_enabled':
				return 0;
			default:
				return null;
		}
	}

	function allow_template($template) {
		return ($template != 'admin');
	}

	function admin_form(&$qa_content){
		// process the admin form if admin hit Save-Changes-button
		$ok = null;
		if (qa_clicked('q2a_tag_set_restriction_save')) {
			qa_opt('q2a_tag_set_restriction_enabled', (bool)qa_post_text('q2a_tag_set_restriction_enabled'));
			$ok = qa_lang('admin/options_saved');
		}

		// form fields to display frontend for admin
		$fields = array();

		$fields[] = array(
			'type' => 'checkbox',
			'label' => qa_lang('qa_tag_set_restriction/enable_plugin'),
			'tags' => 'NAME="q2a_tag_set_restriction_enabled"',
			'value' => qa_opt('q2a_tag_set_restriction_enabled'),
		);

		return array(
			'ok' => ($ok && !isset($error)) ? $ok : null,
			'fields' => $fields,
			'buttons' => array(
				array(
					'label' => qa_lang_html('main/save_button'),
					'tags' => 'name="q2a_tag_set_restriction_save"',
				),
			),
		);
	}
}
