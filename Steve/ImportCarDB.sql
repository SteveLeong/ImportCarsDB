
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
    ('Ferrari 488 Spider', 334409.00, 'Automatic', 'V8, Turbo-charged', 2016,'Ferrari','European', 'Coupe', 'null', 'image/ferrari.jpg', 'With a mid-mounted twin-turbo 3.9-liter V-8, the 488GTB generates a sonorous wail and ferocious acceleration all the way to 8000 rpm, where it makes 661 hp. A seven-speed dual-clutch Automatic is the sole transmission; we estimate a zero to 60 time of 3 seconds. Ferrari’s adaptive suspension is relatively compliant without sacrificing handling.'),
    ('Maserati Ghilbi', 88500.00, 'Automatic','Twin Turbo 3.0-liter V6', 2018,'Maserati' , 'European','Sedan','null', 'image/maserati.jpg' ,'Say “gib-lee.” It’s named for an African desert wind—and the perfect name for a hot Italian sedan. With its deliciously curved lines, the Ghibli’s looks are backed up by what’s under the hood. The base setup is a 345-hp, twin-turbo 3.0-liter V-6 and rear-wheel drive; the S performance version has 404 hp and optional all-wheel drive.'),
    ('Aston Martin Vantage S', 240000.00, 'Automatic', '4.0-litre Twin Turbo Premium Unleaded V-8', 2018, 'Aston Martin', 'European','Coupe','null', 'image/Aston.jpg', 'The best way to live out your super-spy fantasy is behind the wheel of an Aston Martin, and the Vantage is the least expensive way to do it. Offered as a Coupe or convertible, performance from the V8 Vantage’s engine is nothing short of brutish, at 420 or 430 hp; six-speed manual and seven-speed Automatic transmissions are offered.'),
    ('Nissan GTR', 125000.00, 'Automatic', 'Twin Turbo DOHC 24-valve V-6', 2018, 'Nissan', 'Japanese', 'Coupe', 'null', 'image/GTR.jpg', 'Doesn’t matter what you call it—GT-R or, more fittingly, Godzilla—Nissan’s range topper is a supercar-stomping, high-tech dynamo. Its 3.8-liter twin-turbo V-6 makes a mighty 565 hp while a six-speed dual-clutch Automatic and all-wheel drive team up to put all that power to the pavement. The GT-R’s quick steering, rigid structure and adjustable suspension can make even amateurs feel positively heroic from behind the wheel.'),
    ('NSX', 5000.00, 'Manual', '3.2L 6 cylinder', '2005', 'Acura', 'Japanese', 'Coupe', '2', 'image/nsx.jpg', 'good balance and handling, honda-level reliability'),
    ('Integra', 4000.00, 'Automatic', '1.8L 4 cylinder', '2001', 'Acura', 'Japanese', 'Sedan', '3', 'image/integra.jpg', 'good reliability and low fuel consumption'),
    ('WRX STI', 35000.00, 'Manual', '2.5L Turbo Charged 4 cylinder', '2017', 'Subaru', 'Japanese', 'Sedan', '1', 'image/subwrx.jpg', 'good for vaping inside'),
    ('Impreza Outback Sport', 7500.00, 'Automatic', '2.5L 4 cylinder', '2010', 'Subaru', 'Japanese', 'Hatchback', '3', 'image/impreza.jpg', '145k, runs well'),
    ('Lancer Evolution', 21000.00, 'Manual', '2.0L Turbo Charged 4 cylinder', '2008', 'Mitsubishi', 'Japanese', 'Sedan', '1', 'image/lancer.jpg', 'amazing handling, turbocharged'),
    ('V8 Vantage', 84950.00, 'Dual', '4.7L 8 cylinder', '2015', 'Aston Martin', 'European', 'Convertible', '1', 'image/v8vantage.jpg', 'good style and highly customizable, great ride quality'),
    ('Audi R8', 168900.00, 'Dual', '5.2L 10 cylinder', '2017', 'Audi', 'European', 'Coupe', '2', 'image/r8.jpg', 'you want speed, this is ur ride'),
    ('Spider', 129889.00, 'Manual', '4.3L 8 cylinder', '2007', 'Ferrari', 'European', 'Convertible', '1', 'image/ferrarispider.jpg', 'F A S T'),
    ('XJL Supersport', 39988, 'Automatic', '5.0L 8 cylinder', '2012', 'Jaguar', 'European', 'Sedan', '4', 'image/xjlsupersport.jpg', 'fast as a jaguar'),
    ('Gallardo', '153000', 'Dual', '5.0L 10 cylinder', '2008', 'Lamborghini', 'European', 'Coupe', '2', 'image/gallardo.jpg', 'Italian Stallion'),
    ('Subaru Impreza WRX STI', 11000.00, 'Manual', 'EJ 25', '1995', 'Subaru', 'Japanese', 'coupe', 'null', 'image/subaruSTI.jpg', ' vroom vroom very fast'),
	('Nissan Skyline R34 GTR', 50000.00, 'Manual', 'RB 25', '1993', 'Nissan', 'Japanese', 'coupe', 'null', 'image/R34.jpg', 'Belonging to the legendary bloodline of the skyline GTRs, the R34 is an iconic car from the movie franchise Fast and Furious and is a great car over all'),
	('Toyota Supra', 40000.00, 'Manual', '2JZ', '1998', 'Toyota', 'Japanese', 'Coupe', null, 'image/Supra.jpg', 'One of the best modifiable cars'),
	('BMW M3 E36', 12500.00, 'Manual', 'S50B32', '1995', 'BMW', 'European', 'Coupe', null, 'image/M3.jpg', 'Very nice and cool looking'),
	('Volkswagen Beetle', 17500.00, 'Manual', 'Boxer', '1970', 'Volkswagen', 'European', 'Coupe', null, 'image/Beetle.jpg', 'Trademark bug car'),
	('Audi TT', 10000.00, 'Automatic', '3.2L VR6', '2000', 'Audi', 'European', 'Coupe', null, 'image/AudiTT.jpg', 'Great car, drives well');

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


