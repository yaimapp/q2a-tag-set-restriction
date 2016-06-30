<?php

class qa_html_theme_layer extends qa_html_theme_base
{

	function main()
	{
		if ( !qa_is_logged_in() ||
		 (qa_opt('q2a_tag_set_restriction_enabled') &&
		 qa_get_logged_in_level() < QA_USER_LEVEL_SUPER) ) {
			// 質問投稿ページ
			if ($this->template == 'ask') {
				$this->content['form']['fields']['tags']['label'] = '';
				$this->content['form']['fields']['tags']['tags'] .= ' style="display: none;"';
			}
			// 質問編集ページ
			if ($this->template == 'question' &&
				strpos(qa_get_state(), 'edit') !== false) {
				$this->content['form_q_edit']['fields']['tags']['label'] = '';
				$this->content['form_q_edit']['fields']['tags']['tags'] .= ' style="display: none;"';
			}
		}
		qa_html_theme_base::main();
	}

}
