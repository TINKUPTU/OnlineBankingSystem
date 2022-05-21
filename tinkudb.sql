

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `contactus` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `contactus` (`sr`, `name`,`phone`, `email`, `message`) VALUES
(1, 'Tinku', '9988776655', 'tk123@gmail.com','bank service is good'),
(2, 'Pawan kumar', '9768564976', 'pk76648@gmail.com','High quality Bank');



CREATE TABLE `transactions` (
  `sr` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `transactions` (`sr`, `sender`, `receiver`, `amount`, `status`) VALUES
(1, '7788776687', '7784576655', 200, 'succeed'),
(2, '7784576655', '7788783655', 4000, 'succeed');


CREATE TABLE `users` (
  `sr` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `blc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`sr`, `name`,`phone`, `email`, `accno`, `blc`) VALUES
(1, 'Pawan kumar','9768564976', 'pk76648@gmail.com', '7788776655', 50000),
(2, 'Ramesh ram','7898564976', 'rm7664788@gmail.com', '7788776345', 55000),
(3, 'nihal raza','9768934976', 'nr6648@gmail.com', '7780776655', 24000),
(4, 'mohan k','9768567856', 'mk76648@gmail.com', '7788776687', 90400),
(5, 'madhan R','7868569823', 'madh76648@gmail.com', '7788783655', 107000),
(6, 'Bala subramaniam','9238564989', 'ballu648@gmail.com', '7784576655', 23800),
(7, 'priyansh garg','8868564998', 'ask6648@gmail.com', '7787665879', 5000),
(8, 'ashok gahlot','7668564976' ,'ashokgh495@gmail.com', '7788776348', 67300),
(9, 'rishikesh ravi','9787566497' 'rishir405@gmail.com', '7789654655', 8360),
(10, 'Lalu Yadav','9865564784' 'laluae90@gmail.com', '7788776985', 98471),
(11, 'Pankaj Patel','8768564906' 'panky908@gmail.com', '7788776655', 64975);


ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sr`);


ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sr`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`sr`);


ALTER TABLE `contactus`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;


ALTER TABLE `transactions`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;


ALTER TABLE `users`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;
