<?php

namespace App\Traits;

/**
 * Trait HasSkill
 * @package App\Traits
 *
 * You can use thus trait for different subjects (users, animals) to set different skills and description of skills.
 *
 * Firstly spot default subject's skills in getDefaultSkills() method.
 * The key is the name of one of the skill (string).  The value is a description of this skill (string).
 * Also you have to set some of spotted skill names in $availableSkillNames. After it user will be had some skills.
 *
 * Use $personalSkills to set additional skills. It can be usefully for children subjects.
 */
trait HasSkill
{
    /**
     * This array contains names of available subject's skill banes.
     *
     * @var string[]
     */
    protected $availableSkillNames = [];

    /**
     * This array contains additional skills which the subject can develop himself.
     * If you want to create a new skill you have to write skill name and description in this array.
     * It can be useful for children subjects.
     * The key is the name of one of the skill.  The value is a description of this skill.
     *
     * @var array
     */
    protected $personalSkills = [];

    /**
     * This array description of available subject skills.
     *
     * @var array
     */
    private $skills = [];

    /**
     * This array contains all skills which the subject can develop himself.
     * The key is the name of one of the skill (string).  The value is a description of this skill (string).
     *
     * @var array
     */
    private $spottedSkills = [];

    /**
     * @return self
     */
    protected function setSubjectSkills(): self
    {
        $this->setDefaultSkills()
            ->setPersonalSkill()
            ->setSkills();

        return $this;
    }

    /**
     * @return self
     */
    private function setDefaultSkills(): self
    {
        $this->spottedSkills = $this->getDefaultSkills();

        return $this;
    }

    /**
     * Set default skills for the subject
     * The key is the name of the skill (string).  The value is a description of this skill (string).
     * @return array
     */
    abstract public function getDefaultSkills(): array;

    /**
     * @return self
     */
    private function setPersonalSkill(): self
    {
        foreach ($this->personalSkills as $skill => $description) {
            $formatSkill = $this->formatNewSkill($skill);
            $this->spottedSkills[$formatSkill] = $description;

            if ($skill !== $formatSkill) {
                array_push($this->availableSkillNames, $formatSkill);
            }
        }

        return $this;
    }

    /**
     * @param $skill
     * @return string
     */
    private function formatNewSkill($skill): string
    {
        return (string)str_replace(' ', '', $skill);
    }

    /**
     * Set available skills for subject.
     */
    private function setSkills()
    {
        foreach ($this->spottedSkills as $skill => $description) {
            if ($this->hasSkill($skill)) {
                array_push($this->skills, $description);
            }
        }

        return $this;
    }

    /**
     * @param string $skill
     * @return bool
     */
    public function canDo(string $skill): bool
    {
        return $this->hasSkill($skill);
    }

    /**
     * @return array
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    /**
     * @return array
     */
    private function getAvailableNames(): array
    {
        return $this->availableSkillNames;
    }

    /**
     * @param string $skill
     * @return bool
     */
    private function hasSkill(string $skill): bool
    {
        return array_search($skill, $this->getAvailableNames(), true) !== false && !empty($this->spottedSkills[$skill]);
    }
}