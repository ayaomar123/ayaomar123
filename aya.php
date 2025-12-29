<?php

/**
 * ✨ Developer Profile Class ✨
 * 
 * @author Aya Al Rahman
 * @role Laravel Developer
 * @vision Full-Stack Excellence
 */

class AyaOmar123 extends Developer
{
    public string $name = "Aya Al Rahman";
    public string $position = "Laravel Developer";
    public string $company = "Trilum Soft";
    public string $passion = "Backend Magic & Full-Stack Excellence";
    public string $status = "Always Learning 🚀";

    public function knowledge(): Collection
    {
        return collect([
            'backend' => [
                'Laravel',
                '.NET (Learning)',
                'PHP',
                'RESTful APIs',
            ],
            'frontend' => [
                'Angular (Learning)',
                'HTML5',
                'CSS3',
                'Bootstrap',
            ],
            'database' => [
                'MySQL',
            ],
            'tools' => [
                'Git',
                'GitHub',
                'Postman',
                'VS Code',
                'XAMPP',
            ],
        ]);
    }

    public function contacts(): Collection
    {
        return collect([
            'github' => 'https://github.com/ayaomar123',
            'twitter' => 'https://twitter.com/Aya_Al_Rahmann',
            'linktree' => 'https://linktr.ee/AyaOmar',
        ]);
    }

    public function philosophy(): string
    {
        return "I don't just write code — I craft meaningful solutions. " .
               "My journey is about depth, excellence, and staying at the edge of technology.";
    }

    public function currentFocus(): array
    {
        return [
            'Mastering .NET for backend versatility',
            'Learning Angular for modern frontend development',
            'Building scalable web applications',
            'Writing clean, testable, and maintainable code',
        ];
    }

    public function workExperience(): Collection
    {
        return collect([
            [
                'company' => 'Trilum Soft',
                'role' => 'Laravel Developer',
                'status' => 'Current',
                'focus' => 'Building scalable web solutions',
            ],
            [
                'role' => 'Backend Laravel Developer',
                'experience' => 'Several local companies',
                'expertise' => 'Backend development and API design',
            ],
        ]);
    }

    public function getMotivation(): string
    {
        return "Code is poetry, and I'm here to write masterpieces. 💻✨";
    }
}
