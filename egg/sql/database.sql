--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `currency_symbol` varchar(25) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `title`, `description`, `currency_symbol`, `price`, `image_path`, `rating`) VALUES
(1, 'Canon EOS 1500D 24.1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '$', '99.00', './data/camera.jpg', 5),
(2, 'iPhone 12 Pro Max', 'Duis aute irure dolor in reprehenderit fugiat nulla pariatur.', '$', '159.00', './data/mobile.jpg', 4),
(3, 'MLA22HN/A Wireless Keyboard', 'Sed do eiusmod tempor incididunt et dolore magna aliqua.', '$', '79.00', './data/keyboard.jpg', 4),
(4, '21.5‑inch iMac', 'Sunt in culpa qui officia deserunt mollit anim id est laborum.', '$', '199.00', './data/computer.jpg', 3),
(5, 'Pro Audio X240', 'Excepteur sint occaecat perspiciatis unde cupidatat non proident.', '$', '19.00', './data/headset.jpg', 2),
(6, 'Micro USB 55', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.', '$', '9.00', './data/usb-cable.jpg', 3);

