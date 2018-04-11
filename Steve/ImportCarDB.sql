
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `car` (
    `model` varchar(255) DEFAULT NULL,
    `price` double DEFAULT NULL,
    `transmission` varchar(255) DEFAULT NULL,
    `engine` varchar(255) DEFAULT NULL,
    `year` int DEFAULT NULL,
    `manufacturer` varchar(255) DEFAULT NULL,
    `ethnicity` varchar(255) DEFAULT NULL,
    `bodytype` varchar(255) DEFAULT NULL,
    `stock` varchar(255) DEFAULT NULL,
    `image` varchar(255) DEFAULT NULL,
    `desc` text,
    PRIMARY KEY (`model`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


INSERT INTO `car` (`model`, `price`, `transmission`,`engine`, `year`, `manufacturer`, `ethnicity`, `bodytype`, `stock`, `image`, `desc`) VALUES
    ('Ferrari 488 Spider', 334409.00, 'automatic', 'V8, turbo-charged', 2016,'Ferrari','European', 'coupe', 'null', 'image/ferrari.jpg', 'With a mid-mounted twin-turbo 3.9-liter V-8, the 488GTB generates a sonorous wail and ferocious acceleration all the way to 8000 rpm, where it makes 661 hp. A seven-speed dual-clutch automatic is the sole transmission; we estimate a zero to 60 time of 3 seconds. Ferrari’s adaptive suspension is relatively compliant without sacrificing handling.'),
    ('Maserati Ghilbi', 88500.00, 'automatic','twin-turbo 3.0-liter V6', 2018,'Maserati' , 'European','sedan','null', 'image/maserati.jpg' ,'Say “gib-lee.” It’s named for an African desert wind—and the perfect name for a hot Italian sedan. With its deliciously curved lines, the Ghibli’s looks are backed up by what’s under the hood. The base setup is a 345-hp, twin-turbo 3.0-liter V-6 and rear-wheel drive; the S performance version has 404 hp and optional all-wheel drive.'),
    ('Aston Martin Vantage S', 240000.00, 'automatic', '4.0-litre Twin Turbo Premium Unleaded V-8', 2018, 'Aston Martin', 'European','coupe','null', 'image/Aston.jpg', 'The best way to live out your super-spy fantasy is behind the wheel of an Aston Martin, and the Vantage is the least expensive way to do it. Offered as a coupe or convertible, performance from the V8 Vantage’s engine is nothing short of brutish, at 420 or 430 hp; six-speed manual and seven-speed automatic transmissions are offered.'),
    ('Nissan GTR', 125000.00, 'automatic', 'twin-turbocharged and intercooled DOHC 24-valve V-6', 2018, 'Nissan', 'Japanese', 'coupe', 'null', 'image/GTR.jpg\")', 'Doesn’t matter what you call it—GT-R or, more fittingly, Godzilla—Nissan’s range topper is a supercar-stomping, high-tech dynamo. Its 3.8-liter twin-turbo V-6 makes a mighty 565 hp while a six-speed dual-clutch automatic and all-wheel drive team up to put all that power to the pavement. The GT-R’s quick steering, rigid structure and adjustable suspension can make even amateurs feel positively heroic from behind the wheel.');

CREATE TABLE IF NOT EXISTS `user` (
    `username` VARCHAR(255) DEFAULT NULL,
    `name` varchar(255) DEFAULT NULL,
    `age` int DEFAULT NULL,
    `sex` varchar(255) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL,
    `address` VARCHAR(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `admin` (
    `username` VARCHAR(255) DEFAULT NULL,
    `degree` VARCHAR(255) DEFAULT NULL,
    `student_no` varchar(255) DEFAULT NULL,
    FOREIGN KEY (`username`) REFERENCES user(`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `buyer` (
    `credit_no` VARCHAR(255) DEFAULT NULL,
    `username` VARCHAR(255) DEFAULT NULL,
    `country_of_origin` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`credit_no`),
    FOREIGN KEY (`username`) REFERENCES user(`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `inventory` (
    `vin` VARCHAR(255) DEFAULT NULL,
    `model` VARCHAR(255) DEFAULT NULL,
    `username` VARCHAR(255) DEFAULT NULL,
    `price` double DEFAULT NULL,
    PRIMARY KEY (`vin`),
    FOREIGN KEY (`model`) REFERENCES car(`model`),
    FOREIGN KEY (`username`) REFERENCES user(`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `third_party` (
    `username` VARCHAR(255) DEFAULT NULL,
    `country_of_origin` varchar(255) DEFAULT NULL,
    `rating` double DEFAULT NULL,
    FOREIGN KEY (`username`) REFERENCES user(`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `third_party_sell_history` (
    `username` VARCHAR(255) DEFAULT NULL,
    `model` varchar(255) DEFAULT NULL,
    FOREIGN KEY (`username`) REFERENCES user(`username`),
    FOREIGN KEY (`model`) REFERENCES car(`model`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `company` (
    `name` VARCHAR(255) DEFAULT NULL,
    `country_of_origin` varchar(255) DEFAULT NULL,
    `date_started` date DEFAULT NULL,
    PRIMARY KEY (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


