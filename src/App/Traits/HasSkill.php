<?php

namespace App\Traits;

trait HasSkill
{
    /**
     * This array contains names of available subject's skill methods.
     *
     * @var string[]
     */
    protected $availableMethods = [];

    /**
     * This array contains additional skills which the subject can develop himself.
     * If you want to create a new skill method you have to write skill name and description in this array.
     * It can be usefull for children subjects.
     * The key is the name of one of the skill methods.  The value is a description of this method.
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
     * The key is the name of one of the skill methods.  The value is a description of this method.
     *
     * @var array
     */
    private $skillMethods = [];

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
        $this->skillMethods = $this->getDefaultSkills();

        return $this;
    }

    /**
     * Set default skills for the subject
     * The key is the name of one of the skill methods.  The value is a description of this method.
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
            $this->skillMethods[$formatSkill] = $description;

            if ($skill !== $formatSkill) {
                array_push($this->availableMethods, $formatSkill);
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
        foreach ($this->skillMethods as $skill => $description) {
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
    private function getAvailableMethods(): array
    {
        return $this->availableMethods;
    }

    /**
     * @param string $skill
     * @return bool
     */
    private function hasSkill(string $skill): bool
    {
        return array_search($skill, $this->getAvailableMethods(), true) !== false && !empty($this->skillMethods[$skill]);
    }
}