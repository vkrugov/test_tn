<?php

namespace Console\App\Models\Base;

use Console\App\Enums\UserSkillMethod;

/**
 * Class BaseUser
 * @package Console\App\Models\Base
 */
abstract class BaseUser
{
    /**
     * This array contains names of available user's skill methods.
     *
     * @var string[]
     */
    protected $availableMethods = [];

    /**
     * This array contains additional skills which the user can develop himself.
     * If you want to create a new skill method you have to write skill name and description in this array.
     * The key is the name of one of the skill methods.  The value is a description of this method.
     *
     * @var array
     */
    protected $personalSkills = [];

    /**
     * This array description of available user skills.
     *
     * @var array
     */
    private $skills = [];

    /**
     * This array contains all skills which the user can develop himself.
     * The key is the name of one of the skill methods.  The value is a description of this method.
     *
     * @var array
     */
    private $skillMethods = [
        UserSkillMethod::WRITE_CODE => 'code writing',
        UserSkillMethod::TEST_CODE => 'code testing',
        UserSkillMethod::COMMUNICATE_WITH_MANAGER => 'communication with manager',
        UserSkillMethod::SET_TASK => 'set task',
    ];

    /**
     * @param $name
     * @param $arguments
     * @return bool|null
     */
    public function __call($name, $arguments)
    {
        if ($this->hasSkill($name)) {
            return true;
        }

        return null;
    }

    /**
     * BaseUser constructor.
     */
    public function __construct()
    {
        $this->setUserSkills();
    }

    /**
     * @return BaseUser
     */
    protected function setUserSkills(): BaseUser
    {
        $this->setPersonalSkill()->setSkills();

        return $this;
    }

    /**
     * @return $this
     */
    private function setPersonalSkill(): BaseUser
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
     * Set available skills for user
     */
    private function setSkills(): BaseUser
    {
        foreach ($this->skillMethods as $skill => $description) {
            if (!empty($this->{$skill}())) {
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
        return $this->{$skill}() === true;
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
        return array_search($skill, $this->getAvailableMethods()) !== false && !empty($this->skillMethods[$skill]);
    }
}
