<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	function main()
	{
		if ($this->template == 'ask') {
			if (!qa_is_logged_in() ||
				(qa_opt('q2a_tag_set_restriction_enabled') &&
				 qa_get_logged_in_level() < QA_USER_LEVEL_SUPER)) {
				$this->content['form']['fields']['tags']['label'] = '';
				$this->content['form']['fields']['tags']['tags'] .= ' style="display: none;"';
			}
		}
		qa_html_theme_base::main();
	}

}
