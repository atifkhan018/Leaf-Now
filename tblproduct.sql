--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'royal orchids', '10 Purple Orchids Brown Paper Wrapping Tied with Pink Raffia ', 'product-images/royal orchids.jpg', 500.00),
(2, 'lilies', ' It comprises of 6 impeccable lilies bundled together with a ribbon. This is sure to convey your emotion to the recipient perfectly. Gift this amazing bouquet on any occasion to delight a dear one. ', 'product-images/flower.jpg', 200.00),
(3, 'roses', 'Product Contains: 3 Red Roses 2 Yellow Roses 2 white Roses 3 Pink Rose', 'product-images/roses.jpg', 300.00),
(4, 'Acnoitum degenii', 'The bird of paradise flower meaning includes joy and paradise, as it is the quint essential tropical flower. It originates from South Africa. Roses can live for a very long time. There are rose fossils discovered that date back 35 million years. The large rose bush that covers the wall of the Cathedral of Hildesheim in Germany has been there for over a millennium. ', 'product-images/Acnoitum degenii1.jpg', 700.00),



--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;