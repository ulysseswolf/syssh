<textarea type="text" name="content" placeholder="日程概要" class="text"><?=$this->value('schedule/content')?></textarea>
<input name="project_name" value="<?=$this->value('project_name')?>" placeholder="相关项目" class="text" autocomplete-model="cases" />
<input name="project" class="hidden" />
<input name="people" value="<?=$this->value('schedule/people')?>" placeholder="相关人员" class="text" autocomplete-model="people" />
