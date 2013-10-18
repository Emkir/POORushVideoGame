SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `leagueOfProject` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `leagueOfProject` ;

-- -----------------------------------------------------
-- Table `leagueOfProject`.`characters`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `leagueOfProject`.`characters` (
  `id_characters` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `type` VARCHAR(255) NOT NULL ,
  PRIMARY KEY (`id_characters`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leagueOfProject`.`players`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `leagueOfProject`.`players` (
  `id_player` INT NOT NULL ,
  `nickname` INT NOT NULL ,
  `id_character` INT NOT NULL ,
  `player_strength` VARCHAR(45) NOT NULL ,
  `player_life` VARCHAR(45) NOT NULL ,
  `player_intelligence` VARCHAR(45) NOT NULL ,
  `player_protection` BINARY(1) NULL ,
  `player_ability_1` BINARY(1) NULL ,
  `player_ability_2` BINARY(1) NULL ,
  PRIMARY KEY (`id_player`, `id_character`) ,
  INDEX `fk_players_characters1` (`id_character` ASC) ,
  CONSTRAINT `fk_players_characters1`
    FOREIGN KEY (`id_character` )
    REFERENCES `leagueOfProject`.`characters` (`id_characters` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `leagueOfProject`.`games`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `leagueOfProject`.`games` (
  `id_game` INT NOT NULL ,
  `id_player_1` INT NOT NULL ,
  `id_player_2` INT NOT NULL ,
  PRIMARY KEY (`id_game`) ,
  INDEX `fk_games_players1_idx` (`id_player_1` ASC) ,
  INDEX `fk_games_players2_idx` (`id_player_2` ASC) ,
  CONSTRAINT `fk_games_players1`
    FOREIGN KEY (`id_player_1` )
    REFERENCES `leagueOfProject`.`players` (`id_player` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_games_players2`
    FOREIGN KEY (`id_player_2` )
    REFERENCES `leagueOfProject`.`players` (`id_player` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
