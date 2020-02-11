<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190617145055 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE monster (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rarity_name (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rune (id INT AUTO_INCREMENT NOT NULL, rune_set_id INT NOT NULL, rarity_id INT NOT NULL, main_stat_id INT NOT NULL, innate_stat_id INT DEFAULT NULL, main_stat_value INT NOT NULL, innate_stat_value INT DEFAULT NULL, grade INT NOT NULL, slot INT NOT NULL, level INT NOT NULL, atk_per INT DEFAULT NULL, atk_flat INT DEFAULT NULL, def_per INT DEFAULT NULL, def_flat INT DEFAULT NULL, hp_per INT DEFAULT NULL, hp_flat INT DEFAULT NULL, spd INT DEFAULT NULL, acc INT DEFAULT NULL, res INT DEFAULT NULL, crit_rate INT DEFAULT NULL, crit_dmg INT DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_74EECE4EA5A7D50E (rune_set_id), INDEX IDX_74EECE4EF3747573 (rarity_id), INDEX IDX_74EECE4EFD1B86E2 (main_stat_id), INDEX IDX_74EECE4EA670D9B8 (innate_stat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rune_set_name (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stat_name (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rune ADD CONSTRAINT FK_74EECE4EA5A7D50E FOREIGN KEY (rune_set_id) REFERENCES rune_set_name (id)');
        $this->addSql('ALTER TABLE rune ADD CONSTRAINT FK_74EECE4EF3747573 FOREIGN KEY (rarity_id) REFERENCES rarity_name (id)');
        $this->addSql('ALTER TABLE rune ADD CONSTRAINT FK_74EECE4EFD1B86E2 FOREIGN KEY (main_stat_id) REFERENCES stat_name (id)');
        $this->addSql('ALTER TABLE rune ADD CONSTRAINT FK_74EECE4EA670D9B8 FOREIGN KEY (innate_stat_id) REFERENCES stat_name (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE rune DROP FOREIGN KEY FK_74EECE4EF3747573');
        $this->addSql('ALTER TABLE rune DROP FOREIGN KEY FK_74EECE4EA5A7D50E');
        $this->addSql('ALTER TABLE rune DROP FOREIGN KEY FK_74EECE4EFD1B86E2');
        $this->addSql('ALTER TABLE rune DROP FOREIGN KEY FK_74EECE4EA670D9B8');
        $this->addSql('DROP TABLE monster');
        $this->addSql('DROP TABLE rarity_name');
        $this->addSql('DROP TABLE rune');
        $this->addSql('DROP TABLE rune_set_name');
        $this->addSql('DROP TABLE stat_name');
    }
}
