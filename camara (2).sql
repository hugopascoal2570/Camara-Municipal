-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Jan-2021 às 22:23
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `camara`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `titulo_amigavel` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `sub-titulo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `corpo` text COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `foto_banner` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `nova_noticia` int(11) NOT NULL DEFAULT 0,
  `destaque` int(11) DEFAULT NULL,
  `lembrete` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `blogs`
--

INSERT INTO `blogs` (`id`, `titulo`, `titulo_amigavel`, `sub-titulo`, `autor`, `categoria`, `corpo`, `foto`, `foto_banner`, `nova_noticia`, `destaque`, `lembrete`, `date`) VALUES
(1, 'editado com sucesso', 'editado_com_sucesso', 'editado', 'Hugo Pascoal', '', '<p>ghgfhfghdfh</p>', '7c174b0d70803f73922ab85ce9c2a7bf.jpg', '7c174b0d70803f73922ab85ce9c2a7bfphoto_banner.jpg', 0, 0, 0, '2020-12-18 21:19:45'),
(2, 'titulo da Notícia 2', 'titulo_da_Notícia_2', 'sub titulo da noticia 2  ', 'Hugo Pascoal', 'Categoria Teste', '<ul><li style=\"text-align: left;\"><span style=\"color: #333333; font-family: opensans, helvetica, arial, sans-serif; font-size: 20px; letter-spacing: -0.5px;\">&nbsp; &nbsp; &nbsp;As oitavas de final da S&eacute;rie D do Campeonato Brasileiro come&ccedil;am neste s&aacute;bado. As 16 equipes restantes na briga por 4 vagas na terceira divis&atilde;o de 2021 contam com velhos conhecidos do futebol brasileiro. O </span><a style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: bold; font-stretch: inherit; font-size: 20px; line-height: inherit; font-family: opensans, helvetica, arial, sans-serif; vertical-align: initial; text-decoration-line: none; color: #06aa48; letter-spacing: -0.5px;\" href=\"https://globoesporte.globo.com/\">ge&nbsp;</a><span style=\"color: #333333; font-family: opensans, helvetica, arial, sans-serif; font-size: 20px; letter-spacing: -0.5px;\">separou uma lista com jogadores que se destacaram em clubes como Santos, Palmeiras, S&atilde;o Paulo, Gr&ecirc;mio, Flamengo e at&eacute; a sele&ccedil;&atilde;o brasileira. Ser&aacute; que eles ainda s&atilde;o decisivos? Confere na lista.</span></li><li style=\"text-align: left;\"><div class=\"mc-column content-text active-extra-styles\" style=\"box-sizing: inherit; margin: 0px auto 2rem; padding: 0px 1rem; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.25rem; line-height: 2rem; vertical-align: initial; max-width: 42.5rem; width: 680px; float: none; letter-spacing: -0.03125rem; overflow-wrap: break-word;\" data-block-type=\"raw\" data-block-weight=\"4\" data-block-id=\"8\"><div class=\"content-intertitle\" style=\"box-sizing: inherit; margin: 1rem 0px -0.5rem; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: bold; font-stretch: inherit; font-size: 2rem; line-height: 2.25rem; vertical-align: initial; color: #111111; letter-spacing: -0.0625rem;\"><h2 style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: initial;\">Bruno Aguiar (Novorizontino)</h2></div><p style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: initial;\">&nbsp;</p></div><div class=\"mc-column content-text active-extra-styles \" style=\"box-sizing: inherit; margin: 0px auto 2rem; padding: 0px 1rem; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 1.25rem; line-height: 2rem; vertical-align: initial; max-width: 42.5rem; width: 680px; float: none; letter-spacing: -0.03125rem; overflow-wrap: break-word;\" data-block-type=\"unstyled\" data-block-weight=\"41\" data-block-id=\"9\"><p class=\"content-text__container \" style=\"box-sizing: inherit; margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: initial;\" data-track-category=\"Link no Texto\" data-track-links=\"\">Mais um zagueiro conhecido que estar&aacute; presente na reta final &eacute; Bruno Aguiar. Companheiro de equipe de Edson Silva, Bruno acumula passagens por clubes como Sport, S&atilde;o Caetano e Santos. Neste &uacute;ltimo, conquistou Campeonato Paulista, Copa do Brasil e Libertadores.<br /><img src=\"https://s2.glbimg.com/6nX5aj0jfvZ-DxJ7GLCXSZlLqoI=/0x0:800x534/984x0/smart/filters:strip_icc()/s.glbimg.com/es/ge/f/original/2017/09/01/rosiron.jpg\" alt=\"Bruno Aguiar, quando era zagueiro do Goi&aacute;s &mdash; Foto: Rosiron Rodrigues/Goi&aacute;s\" /></p></div></li></ul>', 'b44542051e222bf68aec8f28686b7e30.png', '', 1, 0, 0, '2020-12-18 21:19:45'),
(3, 'titulo noticia  três', 'titulo_noticia_três', 'sub-titulo', 'Hugo', '', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae massa ut velit euismod sagittis id non libero. Sed sit amet aliquam odio. Donec tempus eleifend mauris, quis euismod ante auctor at. Donec ullamcorper, ante non iaculis hendrerit, arcu diam tincidunt dolor, vitae rutrum libero metus a nunc. Integer lacinia risus vitae ligula tempus commodo. Ut elementum dignissim dui, eu pretium dui congue quis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur ipsum eros, varius a nisl quis, rhoncus interdum orci. Nullam sodales sapien velit, vel ultricies est auctor non. Etiam sodales enim quis eleifend pulvinar. In velit felis, elementum ornare ligula facilisis, egestas pharetra ante. Nam vitae elit aliquet, tempus nibh sit amet, mattis ipsum. Proin tincidunt metus leo, ac molestie urna consectetur ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc convallis nunc at cursus euismod.</p><p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Etiam accumsan sollicitudin nisi, sed semper dui facilisis at. Cras aliquam odio nisl, a blandit augue rutrum ut. Suspendisse tempus massa eget dui pulvinar tincidunt sed eu purus. In leo lacus, accumsan sit amet felis ac, dignissim mollis lacus. Praesent ornare ornare dignissim. Pellentesque at lobortis turpis, a pretium nunc. Nunc interdum et magna a ullamcorper. Fusce diam diam, aliquet ac ex ut, venenatis mattis diam.</p>', '0c9fc5d680a4f7b4fbb33602d42e6eb6.png', '0c9fc5d680a4f7b4fbb33602d42e6eb6.jpg', 0, 1, 0, '2020-12-18 21:19:45'),
(6, 'Noticia 4', 'Noticia_4', 'sub-titulo da noticia 4 ', 'Hugo', '', '<p>dasdasdasdadfasdffgdasfadsfasdfasdf</p>', '916ab5a1f9ddbed0b4f7e719abc839d4.jpg', '916ab5a1f9ddbed0b4f7e719abc839d4photo_banner.jpg', 0, 0, 0, '2020-12-18 21:19:45'),
(8, 'titulo Cinco', 'titulo_Cinco', 'sub-titulo da noticia 5', 'Hugo', '', '<p>dgdfgsadfgdfsgsdfg&nbsp; wert rwqet wert wqrt&nbsp;</p>', '742dcc5533e623066027b83de548a75c.png', '742dcc5533e623066027b83de548a75cphoto_banner.jpg', 0, 1, 0, '2020-12-18 21:19:45'),
(9, 'titulo da Notícia Seis', 'titulo_da_Notícia_Seis', 'sub-titulo da noticia 6', 'Hugo', '', '<p>sdasdashd i&oacute;sadfjiafgsdiahfdsihfadsiophfoi&aacute;dshfoia&acute;sdhfasdfadsf</p>', 'e554d3caa7cbd98fbdb681441258d8ea.jpg', 'e554d3caa7cbd98fbdb681441258d8eaphoto_banner.jpg', 0, 1, 0, '2020-12-18 21:19:45'),
(10, 'titulopoooooo', 'titulopoooooo', 'sub-tituloooooooo', 'Hugo Pascoalsddasdsadsad', '', '<p>asdsasad</p>', '56705718cf56c0aaba076b99ead84375.jpg', '56705718cf56c0aaba076b99ead84375photo_banner.png', 0, 0, 0, '2020-12-21 15:29:42'),
(11, 'editado com sucesso testando url amigavelzxczxcxzc\\zxc', 'editado-com-sucesso-testando-url-amigavelzxczxcxzc\\zxc', 'sub-titulo', 'Hugo', 'Categoria dois', '<p>fsadasd</p>', '8c8e924ab653c353d6d986748fdd93b9.jpg', '8c8e924ab653c353d6d986748fdd93b9photo_banner.jpg', 1, 0, 0, '2020-12-22 18:55:17'),
(12, 'teste com acentuação', 'teste-com-acentuação', 'sub-titulo 9', 'Hugo Pascoal', '', '<p>gsfgsdfg</p>', '4d5927e4c8c13f4438999a922ba2fba2.jpg', '4d5927e4c8c13f4438999a922ba2fba2photo_banner.jpg', 0, 0, 0, '2020-12-23 09:44:19'),
(15, 'teste dia vinte e oito', 'teste-dia-vinte-e-oito', 'teste', 'Hugo', '', '<p>adasdasd</p>', 'd769395c513980e938dc9b4b088a1346.jpg', 'd769395c513980e938dc9b4b088a1346photo_banner.jpg', 0, 0, 1, '2020-12-28 19:28:51'),
(16, 'teste do blog com imagem ', 'teste-do-blog-com-imagem-', 'sub-tituloooooooo', 'Hugo', 'Categoria', '<p>sdfsdfsdfsdfs<img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBUSEhMVFRUWFRYWFRUVFRUVFRUVFRYWFhUWFRUYHSggGBolHRgWITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQFy0lHx0rLS0rLS0tLS0tLS0rKy8rLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLi0tLS00LS0rK//AABEIAPQAzwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAECBAYDBwj/xABEEAABAwEEBgcDCgUEAgMAAAABAAIRAwQFEiEGMUFRYYETInGRobHBMnKyByNCUmKSotHh8DNjgsLxFENz0iRTFTSj/8QAGgEAAwEBAQEAAAAAAAAAAAAAAAIDAQQFBv/EACwRAAICAQMCBQMEAwAAAAAAAAABAhEDEiExBEEFMjNRcRMigSQ0YbGRwdH/2gAMAwEAAhEDEQA/APQUgkklMHSSSQaJOmToAdJJJYaJOEydBokpUS5ZLSnTFtlbhYMTzMZHCO7Wgw1FSthOaFXvpVZ7OYc6XasIiecmBzXlVt0xtNY/xHNB3ANnuzjtQh1XEZ6zuJJhbQHpto+Umi3/AG3R7wnuGXiu13/KPZXkA42HiMu8Lym2VRMYAd3ALjTc0fRp97p7gUaQs+ibFedKqAWOBkTkc+7WrkrwO7NIjRIw5AbML/CXZFep6IaVMtTCDIe2MQOuNhKXdcgapOotKmtASSSdADJ0gnWAPCi5SScEAUU6SSYUSQSSQaOkkkgB0kklhoikkoVD3rQBekt6ChQe7WYkDVq1knYF4jeV5uq1HPdrPdGwDgt/8oN4Bo6P6TpxCcwCBhmOOztWFum4qlc9XJu/ZyRaRulvgGzOQBngrdOwVHZgnsz/AGFu7r0Wp0xmMR4o3TsDAIDR3KTy+xaOD3PLnXXVcY1CM1RfZsBiF65Uutrtio2jRmk4eyhZvc14PY8xFqOo/oj+hlr6O0Szbhxa9WNrXZe656uXroecywoXcNhey1taQQYI7diopqXBKWKUT12xXmaVQ03atYncTGR7cv8AK0VN4cJGYK8/0jxEMrU/aY4mNUtIxYT2yQjujd7h7QQZa4SN/wDkehWCmmCSTU8IMEE8JAKSAEmKkolBpQlJMnCYQdJJJBok6ZJADpJkkAJULxtQpsLyYABjiVedkFhPlFvHCxtIe04ahx9nvIOXBYMjLmgbdbHHPAIL3egW2sllaxoa0QAqejt2ChRDT7Rzed7iioXPOVnXjjRNjV0DVBpUwVMqSAUsKaVIIAgaAKqPuhodjAGIaj++MdyKUwurW5rVsZLdUZi/avR0yTqDqOe4HpGnyC43KYksIgy5oBykRjA4ZNcPeK0Gk13Y7O6PsH7hc5Y3RK0YWtB9pj4PbTcWmeGEtHIrpTtHHKNHpt02kVKbSN0/vvHerqy+jtXCXU/qOIHukkAefctQwyJC0mOE6QToNHUdqmo7UADU6ZJMKOnTJIAdJMkUAJOohOgCL3AAk6hn3ZrzGsTarxBObWdc8vYHke9eg3lVbhId7MFzz9kbOflKwmiDsfT2g/TfA4AZx4hJLgpjW5pCUpQu1X7Z2ZGo2VGy3xSqGG1GnhK55JnZFoNMK7NaqdGqrlN6UcmGroAueJTa5Bh2YF3ptXCm8Kwxy0CzaaYLYOr0Ij1XnlssP+nrAfRfUxH+poYfNx5r0dxkdv5BZXTWyF1GW62zmN37HgqJ0RkrR2u0f+W3dUpNce0hg83PWpsr9YOvJ3f7Xc6e8LL2U/O0H76LQe3Gw+vgtK/q1WnYSRydBH4lWLOVloBOnShaAlEa1NRCABiSSZMKOE6inlADpiUpUUAOlKaVzquyjkgDLac23o7FUzzqHAOw+kA8ys1o3Se+whoOEOLyXbcyQAOQT/K1b4dTog6hiI4kADyKKXbS6OyUWHIim0n3nDE7xJU5ulZbErdGatGiQcSekdO85qjU0ZqMMseD3grQ2nSChTdhLpPAEgc9S60byoVBIfzOrv1KOuZ06IA24rbaKbwx4dBO3McitxRqoCzIopZXpGyiQSa5cLbbm0myfBWaFPJcbbZWu9oTCLAzto0pcDDGd64jSa0mpha0xkRDdhjX3oz/AKKkDk1vcrVFgGoJtSQrjZast6VTQa8gzGcjaBn8Ku257atB0fSb8TT+a63e4OZqXO8bNDWlm2WkduQPfCe00RpoHWV4+b+ywfCw+q1F5N6k7QGkdoz9CsZYKwcakah0gHYMYaO4BbetmztY3xJCeDITRYYZAO8SkuF21MVJp4R3ZKwnFHUQpKLUACkk0pJhR0kyZAElElIqMoATnJvT1TDWo1HwxzuBKAPHtLqZtd8CjrGMNPuN9vwBWm0lp1XNcKeWX7HBU9FrF0lutNqP0T0bO05vPdH3lqqtGVz5Zb0deCO1nkrLtaGvbWDulkRrLcOWTeOvYqNiou62RpvxAMcMgQTBDp1hep2y6mO1tHcqX/wzRqA8Sj638Gvp12YB0etr3EsdGJhhwGotMw4c8ltbupkwqVkuwAzAHYADzK0F20M1GW7LxVKglSoQ1A76tHRiStS5nVWY0ouzpaZaSQDrI19nYtAw9q0rMnBTe4A+0BlyccvNXbv0s6s1WVGNJgOcA4HfENCquuh9NjWNAcGuxAgEawR1tu1crlu57HOlvTAkZOnYZkyNp2bgqLQRk8l7G8uK8g52HeJG4jeDtRi314s9QzENMcDqB78+SyWj9wPpVOkaQ1rifmWzgpz9STkjuldUtstQj/1zzBg+Kza9jXfcBXAZbU4ureH+SvQ5HRs/4x4GfRefaOiGidoqc9ZB5tAK3tldNNo/lR3tcfyVIPdnPMe6fZI+04cwc1fVC79dT/kce+D6q+qExJmp0moADpk5TJhRkpSTIARTJFRQAztfaqV/Voolv1ur6ny8Vcccxwz9PzQPSup1ANsE/vu8UMAfosz5guiMVWoT2h2DyaEXQbRWrNlB/mV+4V6gHkifSLknyelhjsTc0LnUgJn1YVHHjeATA28lMo0EKbcpRS7W5oMbS05NIyyIB1dqK3XUTCpBuFWtDQcl3a8O1HNCr9rGm5p361r4MSKlou8TI7k9ms0bF3s9qDhKuUwCkGpj0mCMgq99WQ1LNVZlJYYnVxnhkESpUk9eII3g88tSZCyRhNHnB1JjwIHWgcDTd4/ktzY8gzjSHqsZc9Lo6bGfVqOb3F7VtGjqs/42fCB6lVxnJlJXeevV9/0A9ERQyyZVqg4n4gETVURYkmpFILTAMkmSTGCKjKcqKAEoynXMoAcbVldLLT1Xu3ZDjhM+pWnJyWB07rEUjB2ficCPTxWM1D6A2gOsIA+hUqNPN2P+8I3jWJ+S60z/AKilxZUHOWu8mrZVQuXKqZ6PTyuI1aqqzmmMtaix0uV5tLJSLNmdo2Ho63TM6rtTwNTxuI8Vq7qtkgwYMZSJz7FXp2IFWKdkDTktswpWe67Uyp0otdV0mS15Bb2YYgcoRa8XuqhuP6I2bZV+hTkJWizZLRdQAsdoIdCP2OrKz1qZhfKJ3dWmEqH7GmonJD78tYpMDzqaZPZGfgrFnesj8pN44bI8NPWfDG+88wnEZZttHDVaBqLnO7SWuM94lat+0bmUx2dWT5BZASadmO00wOyGx3xC1lX+I4cCe5rWj4Sqx2OGe41nPz7+ffr9CiyE0P8A7D/ejxP5oqFWPBKQikEinC0UCJk8pkwDFMnKigBFcypEqJQBCpqPYvOflAd82eDsv6Z9V6JWORXnmnzJpu+yfiLhPgVjGiZn5NrRgtuE6qlN7OYh4+Er05zV4nd1tNGqysPoPa7tAPWHMSOa9sbUDgHNMtcAQd4IkFQzrudXTS7AW8g+nLqYlwkwdRWeu696tptHQ1B0ZMloxEgxsAyW0eyShF7XYzJxbLZnLItO8EZjtUYtdzqe/DO1kuStiGF0HDMgkQcsjH7yRGz2O3GRLcjryk5Tll5qtclodTybUlsABtT6IA1Bwz75R2z3w4aw3kf0W/aD+ou1gyhXtzQ10Eh2oEN7c9yK2TSFhcKdYYH8cge9dDebiGwGiDnOYIgwRuKCnRg2gh1oeXwACYwNMEmYGs5n9E1Jdxd3yqLV84XeyQexc7jcTr2a1N92U6IwU24W7gr922cNCl3HWyLtWpAXm2m1r6a00KAz68mN+QHmt1e1rDWE7gvNtFibTeZqn2WB7+7q+g71SCt37EcrqNe5vqNQOIYP9qsGjsfTb/1K08/O1O1w+L1HisZoyS+tUJ212u5YCR5rW0qnXqHe/wD7fqqROWRYs2dV3veR1Isg91umse30cfyRghWjwSlyMU4TFOFooDSTJLQEVEpyooAYrmV0KggDmVhdNaJ6KpvzI5Oct1UOSzekNlBpvBzlhA4mf1SyGieMPEM7vHP1XoXydXv0lA2d/t0vZnbSJyjsOX3VhrfTgvbueRyzHorGhNVzLViadTTlsIJGRWTpxKY7U1R6/gXN4yXSzVw9oIUyxclHcgU+zDYISo2MzrKMU6QKs0bMEtFNTQrusYEEye38kWxLjTZCnCcm3ZStjZK51K+Fq6WyqAsjpJfraLCSc9g3pe5vYE6eX/hZ0bT1nZLnoPQ6OyV6u2oRSadueTiOUFYK0Wp1eqajs9w3bgvUOg6GyUaOotp43e87IeZ7l0adMa9zjc9cr9g1om35xx4tdzdicfMjktRZMy4/zI+6Xj99qyujtUMIJP02NE78LnQPveC01HJr/fP4nT5FCEfJ20edNZ52Aj4EfKBaNGXVXfagcm5o8VSHAk+SJUgmKcJhACkkmWgJMUimKAGKgVIlRJQBzegWkDoaTuaTzgo29ZfSytFN5+y7wBA8QUsuBonmukVDDUfxAdzESfFcNEuraWz9Jh8CjN/0JIOs9G5vMT/1CHWGlhbZ6v8AMcw8yQPJJJ/bRaC+9M9CstQsOWpEWWgFUKTZaExaQuRM7aC7a0K7ZbRKzfTuCnTt7m7EWbRtKblWt1tawZlZt191IgNjihFutFR2bit1GaSxfmkAbO07AvNb8tj6ri557BsC0lrs5Kyt7xMK2JKyWfaJd0Nuzp7TSZsLw53uM6x8QBzW+vO0dJaHaogADZGpv9x5hCPk9s2CjWtJ2g0qfYM6jhzy/pV+72jpATm5zsfYNh7hA7083bOWC2Ldqrhlaz0x/wCwuO6ZAM8mu7luhnTBG1wP3WQfELzKq4vvJgOprXAduEzHNzl6SHwxv9ZHME+crGaEbiAl8ag4xxktJPijI1IBoy/qTvEjnh9QUfbqVIcE58jFSUSpJxDPymUZSJQA5TJpSlACKg5OSuNWoBrKAIWirhElYXSCsahFNpnEc90ZT4TnwKM3zeMg5w3aeA14R4Ss1bLYA6QMwJ5n2QT2x3JGykUU70YDHDpXE7B1CTnzlcbnoCpYnN1FtaR2ksg/jXe0mabgdeHs9tucjsKqXRauis1odE4XsfG8EAf2hJJXHYrF1Lc29hb1BO5dHU1xue1srU2vYZa4SP14q8WLkOyymaKcUVawKQYtoLKT6aqVaKK1GKs9ixm2Z+8WQ1ef29rqlYMaJJcGgbyTAXoN+HqnmhuiFzBjn2ysOrTBLJ2u2nkrYXW5DqFaNBUots9nZQGYpU9X1nGJJ4Tmud0SS552CJ4kTrQmpbHPaajjnUe0djR1iIRRtYMsbnjbiI5dUeXinI1SBuj46S8Q8mZmOMyMuwQvUKmTW8Q6fIrzHQ2mTb2uJz9kDgIExsG4L1G0N9kcHfvwQzC3o57I91s/iPqjyA3YQ2Pdb35/kjrFaPBGXIipKJ1qSYUzRSlRK5vqAayBzWBVnUqKp1LeBt7h+qH17ycTDfGB5ITTFnLTs0Fa9YN1n8z2IFed6bBmdyrWl7zMnujzQyqQw4uXPPOf8KeR0hsM9UqoqX3XwgOeZcc4OoRqy3DXKH0TiAOcEh2I7m5uOrLOOZ4FU7dTqVqpMQwZYnZNG7Xu3cF2t9WGCnTnVm46428RPqdUylXB0Pkay1i91QnW/EWjdhcGiOEHwC42azGpRrsZrcxjWzwfig+A5rgXdE6m0HXTOe+cREfdHcr9wuAqFmomo6PdycPMdy1uo2jUrlTAmjN+PsVUsqA4Jh7TrYfrAee/z9asVpZVYHsIIIkEZghZjSPRZlpGMdSoBk6MjwcNoWbuy22q7HYa1MmiTsMtB2ljtk7jE8EjrJuuR4uWPZ8HqcJ8Kz12aWWev7LwD9V3Vd3HXylGm2tu9Raa5Lpp8HSoFUrBPaLa0ZygNfSGm5/R0jjcTENzA7Xagspvg1yS5OlosvSPw9/AIZpbeQbTbZqfs5Yo3buaMPqFlMxm46zsWLvPrVWiZg4nHyHirY0kc825BNwEUwd8nnAPqr98dSzhu7oweJJLj5Ia1pNUj6rRI4k5DwRPSOlNEu/mMHcw/qmFOOhZJtYqb3nwdHJepWlsYTH0D4OOpecaJ0SHN3hzye0P/VelWpxwtO7LvMoXIsitaq+AN4xPJrjCIXZfbSAHnYM+yQfKewhZrSCuRh2ZHPk2PTxUrCJo4yPZJI5iR3AeKrHmiGSSjFs3dOux2pwPMLssRdlfDUA+1GeeXXb+S0VK3wYI2NPe0H18FWUdKs58GdZnpS3M3Vqk7SuOFWnU1Ho1xOTZ6qikDbXTynd6KpaaQBlrv32ovaKWSHVbGHsaTriNuwjd2K3TrU2meb4lLQoyXwVC9sdY+HBCrxthGoADe4hu7Vv70Rbd0GWtbszniRukoffVnPRyBi1CBkCSNu9UyY9jk6XqFrV9zL2m3F5MunfhBa0DiZkjZlrVZ9QvkA6gY1Dfs2ZDwXO30ansnLaGjIDfziVK7myJGuSJ4ZjzcFJVR6+9iviWvou2Gm0Ebuu6ezWit1UofZqo2uDH86bmieYCo32A6jSqbILCe0NcPIrtZK//AIpOvC5rh94O8DnySp3Ff4H4kz0tjMkuga4FrgCDrBEg8lxum0dLSa7MbCCIMjbHHIjgQr7WrnqmdKdoyN5/J9ZahJZipHc0y37rpjlCF2TQ2rRrMcLQSxr2ktIIEA7etEcl6MqVoMHVPiqfUlxZP6UeaMXe+h1S013VelFNjyD0QaS1vVEgDFAzkozcujFGytyl7trnZeAWgqWc0zhjIQAQMj1QcvHuVeqclkskuAjji9wJfDpEDUs5Rs/zo2nI9xn0C1NrozKzFOr89WOxjcA3YiJdzzCzHbY2SlEv3WwYatZ31suOEmB4K5awXWWoZ/3GGd00x+qF2+09HZSw6w4Ny1SWyR4o7cbRWslVo+qDx6ufkCrM5yOigHzThqex5HMtd6r0Cu/qNI592XqsBoocqR1APLR2EOa34GrdYhIHYOYd+RK2IkwDf7MbsOotwiezX8QVu7B8y0fWB8GEAeCG1a2J8/bwnjGOZ+6Ffssgt+yB+Jzp8XKuNXI4usnpxkXEte12yZ8G1PQo7VMP5HuxOjwhCbc3qtnY5o5SW/3IkTIY7fTb4CD4q2f0zg8Nl+pr+GQDUhTVjAnDV5x9IVjRQ+izqxxd8Q/NG3NQuxiWzxd4vA9F1dJ5/wAHj+Negvn/AKUuh8x8ZVc2cFkcW/CB6ooaef3fjcqlIZu7/BkL0JK1R81jm4u12AFuuMOaTGZGs7OxY2x2F1KoWObtIHbIdPZlC9e/0wwoPbrpaSTGa8RNxtH3qqaTMA+yzTdQJyIGAn6wEsPOPFBLJVLW1GH6TD94DzW9vG6j7Q1gd8Z+eazdtu0OJeyQ6TI2SNvZ+9ibHNcMycHyjQ6D24xTa4kiqx2GcIh9AhpHV3swwTmRTWzLV5bY65o0G1BM0a4qRIgtyDm5jaHVRkRM6pXqlMggEZgiQd4OpNlSu13MxN1T7HIhVK1J46zHFpjWI9VfLU0KJcrVpeWHEf4bJE5BwGYjYfzTOpKyykBqCZ4Q92ZHZUBrcQ1pOwa151dlXFTNTE6X1S9zZEAFxiREzEZHtW90mMUHje0t+9l6rFW54pMZSbrcIEbM8z2mcuapi7ksu7QOt9uNTEBqLyef7BW10FtENpg66ktPZBgfvesHWpwSANn+PJaXQ6sQ5hOyq3kFZ8Ed7NFdtPoSWHU2qSJy9mpPwuWstjoLSDqPrKBX9Siu9o1uxOHNg/JW69pxU2Ob9KlI7Y1rAaKNOHdI0b8U+8HN8vNG7A3FTxfYdlxHWaPArN3J16tR49l0R2ZR4StPcpzcDmJn8WE/hcq4H9553iSrD+Rrz9g8JPwvCIA/N0z7/wAUjwIVStTmmQdwnth1M+QXaxvmjTPb8NP1lXz+mzzfDn+pi/n+gnhCRaEkl559SReMihV3DqDiGeLiUkl19H5meJ456Ufn/RMfR/p+F5VGwHrO/oH4Z9Akku9nzMQm0ZLhVanSXhz8zPv8Hkj8IpV6QWcvKyME5cecpJKbLoy9wumpXpHNsluszDjB1fvILdaF1i+wUHO19GBybLR4AJkl0ZPKQxv7mGk8JJKBYZqVQZJkkAYT5RbQ5lnlpjrD8/RZ+8uta2NOprXAD3XOaPABJJdGP0yE/UX4ONvoAEcRPgu+jxIc4De080kkq4Hmtz0a/P49M72ifuFDqR/8YHaBUbyySSTPkl2I6OMAot4sYe9oPqj1wHN/9Q72PP8AaEklTp/UODxP9u/lBaoMn9rj/wDoz/sVwsH8Fg4epHoE6S68/kZ4/h/7iH5/o//Z\" alt=\"\" width=\"800\" height=\"800\" /></p>', '78a74e7cf37754e8b4dd7a51cde4375e.jpg', '78a74e7cf37754e8b4dd7a51cde4375ephoto_banner.jpg', 1, 0, 0, '2020-12-28 19:51:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `nome_arquivo` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `original_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `files`
--

INSERT INTO `files` (`id`, `nome_arquivo`, `original_name`) VALUES
(1, '41bde81d79913877af4aab616ceaf768.jpg', 'glob.jpg'),
(2, 'fb61da9ae8cf56917e4d50f3e9fe2053.pdf', 'dezembro.pdf'),
(3, 'd36812d1ff0384fc907cd6efa92cbc2c.pdf', 'lei_organica.pdf'),
(4, '97f89bf71ddaf3ca4913d6409cd6a14f.pdf', 'regimenento_interno.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `laws`
--

CREATE TABLE `laws` (
  `id` int(11) NOT NULL,
  `number` float NOT NULL,
  `projeto` int(11) NOT NULL DEFAULT 0,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `FileName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `OriginalName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `laws`
--

INSERT INTO `laws` (`id`, `number`, `projeto`, `description`, `year`, `date`, `FileName`, `OriginalName`, `created_at`) VALUES
(38, 1, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1988', '1988-12-19', '38a7c24945707b83812571082cfdc21d.pdf', 'Lei Nº 001.pdf', '2021-01-04 16:52:34'),
(39, 6, 0, 'Concede aumento aos funcionários: efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências.', '1988', '1988-07-13', 'fe156bd77e11678b853a2c6b5ec5fa5c.pdf', 'Lei Nº 006.pdf', '2021-01-04 16:54:35'),
(40, 11, 0, 'Concede aumento aos funcionários: efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências.', '1988', '1988-09-15', 'd19218fa56eafc2d7cdf11fb8d7ce0be.pdf', 'Lei Nº 011.pdf', '2021-01-04 16:55:32'),
(41, 12, 0, 'Autoriza o poder executivo a contribuir pecuniariamente em favor da Sociedade de Desenvolvimento Comunitário de Casinhas(SODECOCA).', '1988', '1988-09-16', 'd49732487bf238e4d3ff5a2b9b9a3dce.pdf', 'Lei Nº 012.pdf', '2021-01-04 17:00:26'),
(42, 13, 0, 'Doa a sociedade de Desenvolvimento Comunitário de Cainhas (SODECOCA) 01(uma) Ambulância Modelo Caravan Ano 1987 e dá outras providências. ', '1988', '1988-09-16', 'b0dfe0d2f21ccdfbf29d83eb97e7e718.pdf', 'Lei Nº 013.pdf', '2021-01-04 17:02:40'),
(43, 14, 0, 'Concede aumento aos funcionários: efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências.', '1988', '1988-09-15', '71f61c42e8281c057b40655d5eac5454.pdf', 'Lei Nº 014.pdf', '2021-01-04 17:04:05'),
(44, 15, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1988', '1988-09-16', 'adb8e81e3227372763a656f9a9adf95a.pdf', 'Lei Nº 015.pdf', '2021-01-04 17:05:45'),
(45, 16, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1988', '1988-09-19', '0ad98eb607e5ad65fa4e4ddd46c900b0.pdf', 'Lei Nº 016.pdf', '2021-01-04 17:07:52'),
(46, 18, 0, 'Concede aumento aos funcionários: efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências.', '1988', '1988-10-03', '54cdb756b12fd9906954076c55142176.pdf', 'Lei Nº 018.pdf', '2021-01-04 17:08:37'),
(47, 24, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1988', '1988-11-17', '76cb8b87345d28b633bd3c992ea56728.pdf', 'Lei Nº 024.pdf', '2021-01-04 17:09:27'),
(48, 25, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1988', '1988-11-17', 'c932097fe5a77a520a40f5a9ad4ef335.pdf', 'Lei Nº 025.pdf', '2021-01-04 17:10:03'),
(49, 32, 0, 'Dá nome de Rua e adota outras providências.', '1988', '1988-12-16', 'f9c6f3ed865cc7df17df251f9d728ac5.pdf', 'Lei Nº 032.pdf', '2021-01-04 17:10:55'),
(50, 40, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1988', '1988-12-26', '27b3989cb6d1abc652f7c565d7a534ec.pdf', 'Lei Nº 040.pdf', '2021-01-04 17:11:29'),
(51, 41, 0, 'Concede pensão e dá outras procidências.', '1988', '1988-12-28', 'cde224f45394c2b3e39d29df4ccb1e50.pdf', 'Lei Nº 041.pdf', '2021-01-04 17:12:18'),
(52, 42, 0, 'Faz doação de um quarto a Antônio Oliveira Arruda e dá outras providências.', '1988', '1988-12-26', '881bb2c65860cfe9b1ee86afd4d83054.pdf', 'Lei Nº 042.pdf', '2021-01-04 17:13:40'),
(53, 6, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-03-28', 'c18e6e20f465676b8433072224b86217.pdf', 'Lei Nº 006.pdf', '2021-01-04 17:30:37'),
(54, 7, 0, 'Institui o imposto sobre Transmissão \"Inter Vivos\" de Bens Imóveis e de Direitos a eles Relativos -1BT1, e dá outras providências.', '1989', '1989-03-28', '0895bb2a3444c7d9c7da4e9298f3ba05.pdf', 'Lei Nº 007.pdf', '2021-01-04 17:32:10'),
(55, 8, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-03-28', '03e85d6fcffac009a0dccd05da0b540c.pdf', 'Lei Nº 008.pdf', '2021-01-04 17:32:51'),
(56, 9, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-04-27', 'e28678dddd18e7139a92ed37d88864a1.pdf', 'Lei Nº 009.pdf', '2021-01-04 17:33:35'),
(57, 11, 0, 'Institui o código de Posturas e dá outras providências para o município de Surubim', '1989', '1989-05-18', '5dd570b53c45b125b82c9a53b7b37589.pdf', 'Lei Nº 011.pdf', '2021-01-04 17:34:40'),
(58, 12, 0, 'Dispõe sobre o parcelamento do solo urbano e dá outras providências no Município do Surubim', '1989', '1989-05-18', 'df3d9c5f1b8e098477229168674dc637.pdf', 'Lei Nº 012.pdf', '2021-01-04 17:35:56'),
(59, 13, 0, 'Dispõe as condições para edificação no perímetro urbano do Município do Surubim', '1989', '1989-05-18', 'b752d07231241f2a68dc459d2c36cb4d.pdf', 'Lei Nº 013.pdf', '2021-01-04 17:37:00'),
(60, 16, 0, 'Cria o Plano de Classificação e Cargos do Poder Executivo e dá outras providências', '1989', '1989-06-14', '981412ca96ee427284905982bc3ed464.pdf', 'Lei Nº 016.pdf', '2021-01-04 17:41:38'),
(61, 17, 0, 'Dispõe sobre o Estatuto do Magistério de 1º e 2º Graus do Município e dá outras providências', '1989', '1989-06-14', '429cddcbfbab472e9dd663b9295f2e2e.pdf', 'Lei Nº 017.pdf', '2021-01-04 17:42:56'),
(62, 19, 0, 'Extingue e cria cargos efetivos da Câmara Municipal, e dá outras providências.', '1989', '1989-07-14', 'd991bb8d51c052cfb64a0660008e7b11.pdf', 'Lei Nº 019.pdf', '2021-01-04 17:43:35'),
(63, 20, 0, 'Cria os órgãos da Administração da Câmara Municipal, e outras providências.', '1989', '1989-07-14', 'c5508b0ee4d8a9fc91c53ca695a8f0ab.pdf', 'Lei Nº 020.pdf', '2021-01-04 17:44:05'),
(64, 28, 0, 'Autoriza a abertura de Créditos Suplementar e dá outras providências.', '1989', '1989-06-22', '6f9f1239431ad7c5caea78319c3e7879.pdf', 'Lei Nº 028.pdf', '2021-01-04 17:44:45'),
(65, 38, 0, 'Concede aumento aos funcionários efetivos, comissionados, contratados, gratificações, aposentados, pensionistas, e dá outras providências.', '1989', '1989-08-16', '3c4f7eee99d8a339a61ab0e3c24639c6.pdf', 'Lei Nº 038.pdf', '2021-01-04 17:45:15'),
(66, 39, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-08-16', 'b34c43088a21f57e835fa4f35d9f8d35.pdf', 'Lei Nº 039.pdf', '2021-01-04 17:45:39'),
(67, 46, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-09-20', '17c6ebd38248b996a483b01962900b5d.pdf', 'Lei Nº 046.pdf', '2021-01-04 17:46:02'),
(68, 56, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-10-18', '1736eef497d27be2d9cd37b95e936451.pdf', 'Lei Nº 056.pdf', '2021-01-04 17:46:25'),
(69, 59, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-10-25', 'db2b907f933faee4afc6d1e9843b7c99.pdf', 'Lei Nº 059.pdf', '2021-01-04 17:46:48'),
(70, 63, 0, 'Considera de Utilidade Pública a Sociedade Comunitária de Desenvolvimento de Vertente do Lério e dá outras providências.', '1989', '1989-10-25', 'ee41c13a5a863061bace432af4e4f021.pdf', 'Lei Nº 063.pdf', '2021-01-04 17:47:07'),
(71, 74, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-12-06', '897abd5408d22397be7e429c51154875.pdf', 'Lei Nº 074.pdf', '2021-01-04 17:47:36'),
(72, 77, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-12-13', 'fcb87c8284e357feb433abdd52128ef5.pdf', 'Lei Nº 077.pdf', '2021-01-04 17:48:06'),
(73, 79, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1989', '1989-12-22', '2acc3dd6d93edfa513bb4145390b0270.pdf', 'Lei Nº 079.pdf', '2021-01-04 17:48:25'),
(74, 1, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-12-07', '66f8684e0eb69a364a59f7c52a9f3c30.pdf', 'Lei Nº 001.pdf', '2021-01-04 18:06:34'),
(75, 2, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-02-14', '5d1f6bc765fccc34ba2445dfbd4f5128.pdf', 'Lei Nº 002.pdf', '2021-01-04 18:06:54'),
(76, 3, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-02-14', '6a47dc10ffd1de712cc9c21efa3b63c3.pdf', 'Lei Nº 003.pdf', '2021-01-04 18:07:20'),
(77, 4, 0, 'Concede aumento aos Funcionários: Efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências', '1990', '1990-02-14', 'daf74eaab01f04d2310448cb08516ba5.pdf', 'Lei Nº 004.pdf', '2021-01-04 18:07:44'),
(78, 5, 0, 'Modifica as descrições, acrescenta, logradouros aos Bairros.', '1990', '1990-02-14', '37d9ad0992e27d0d9f7e86285ab6e503.pdf', 'Lei Nº 005.pdf', '2021-01-04 18:08:24'),
(79, 6, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1990', '1990-03-13', '8ab5948573aabf4973d792cf6c824a5f.pdf', 'Lei Nº 006.pdf', '2021-01-04 18:08:44'),
(80, 7, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1990', '1990-03-13', 'bd73076f95b33a666c1a757fd7d328c0.pdf', 'Lei Nº 007.pdf', '2021-01-04 18:09:06'),
(81, 8, 0, 'Concede aumento aos Funcionários: Efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências', '1990', '1990-03-13', '68950910cd3bbc9f72c4b1fa057bc9df.pdf', 'Lei Nº 008.pdf', '2021-01-05 14:45:07'),
(82, 9, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1990', '1990-03-21', 'fdb2a0591d944b3ca9a029ddfc881571.pdf', 'Lei Nº 009.pdf', '2021-01-05 14:45:40'),
(83, 10, 0, 'Doa Terreno ao Sr. Antonio Faustino Barboza, e adota outras providências.', '1990', '1990-03-21', '6dbb35542b9ff321060952898bf204db.pdf', 'Lei Nº 010.pdf', '2021-01-05 14:50:03'),
(84, 11, 0, 'Dá-se o nome da Escola, e adota outras providências.', '1990', '1990-03-21', 'e75149f5542376c8419ed0d85d18fded.pdf', 'Lei Nº 011.pdf', '2021-01-05 14:50:33'),
(85, 13, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-03-28', '14e714fb9daa169a58fbcde471b2d4df.pdf', 'Lei Nº 013.pdf', '2021-01-05 14:51:02'),
(86, 14, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-04-04', '40e6aedb84479f220cd46b76c4b551d7.pdf', 'Lei Nº 014.pdf', '2021-01-05 15:18:20'),
(87, 15, 0, 'Faço saber que á câmara Municipal do Surubim aprovou e eu sanciono a seguinte Lei\'s', '1990', '1990-04-04', '73470113a21933377d4a7ec52a3a7e1f.pdf', 'Lei Nº 015.pdf', '2021-01-05 15:18:50'),
(88, 16, 0, 'Concede aumento aos Funcionários: Efetivos, comissionados, aposentados, pensionistas, contratados, gratificações e dá outras providências', '1990', '1990-04-18', 'a2aa759150b3e97be9408912fa368903.pdf', 'Lei Nº 016.pdf', '2021-01-05 15:20:14'),
(89, 17, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-04-30', 'f86472fe1412be3680cde60738fcea6e.pdf', 'Lei Nº 017.pdf', '2021-01-05 15:20:40'),
(90, 18, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-04-30', '9e61284f763f1cef5b8afeb3f7dbaa18.pdf', 'Lei Nº 018.pdf', '2021-01-05 15:21:06'),
(91, 19, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-04-30', 'f4aee5906e647c76f6133cc8f765aaa4.pdf', 'Lei Nº 019.pdf', '2021-01-05 15:21:28'),
(92, 20, 0, 'Autoriza a abertura de crédito Especial e adota outras providências.', '1990', '1990-05-04', '9391966c502728c34b22c7bb8b226fc8.pdf', 'Lei Nº 020.pdf', '2021-01-05 15:21:53'),
(93, 21, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras Providências.', '1990', '1990-05-04', '9d0004af9a893b9b9525792300957add.pdf', 'Lei Nº 021.pdf', '2021-01-05 15:22:16'),
(94, 22, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-05-04', '24f29fa6aaaead8f8591f49be84cfab9.pdf', 'Lei Nº 022.pdf', '2021-01-05 15:22:40'),
(95, 23, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras providências.', '1990', '1990-05-16', '4310e12f0f736c29c905636e89bc17ea.pdf', 'Lei Nº 023.pdf', '2021-01-05 15:23:03'),
(96, 24, 0, 'Concede aumento aos Funcionários: Efetivos, comissionados, aposentados, pensionistas e dá outras providências', '1990', '1990-05-16', '1283803f247a1417ea87699887fc1b24.pdf', 'Lei Nº 024.pdf', '2021-01-05 15:23:28'),
(97, 25, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1990', '1990-05-16', '222872fe4c74f42442a9269dc62b03b6.pdf', 'Lei Nº 025.pdf', '2021-01-05 15:23:52'),
(98, 26, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1990', '1990-05-16', '57e214527056b042ad2c24afc2874465.pdf', 'Lei Nº 026.pdf', '2021-01-05 15:25:46'),
(99, 27, 0, 'Autoriza a abertura de Crédito Especial e adota outras providências.', '1990', '1990-05-23', '988cb6024e6a1f3b5d1fb99776b515fa.pdf', 'Lei Nº 027.pdf', '2021-01-05 15:27:23'),
(100, 28, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras providências.', '1990', '1990-06-06', 'b3475ab28dd3e5f7d46a4d0fb278bc22.pdf', 'Lei Nº 028.pdf', '2021-01-05 15:28:24'),
(101, 29, 0, 'Dá-se o nome de Rua e adota outras providências.', '1990', '1990-06-15', 'a01ab201076a3bdda02f64c368746463.pdf', 'Lei Nº 029.pdf', '2021-01-05 15:43:05'),
(102, 30, 0, 'Dá-se o nome de Rua e adota outras providências.', '1990', '1990-06-15', 'deb99b0a235f1ffa573e6084510ba02b.pdf', 'Lei Nº 030.pdf', '2021-01-05 15:43:37'),
(103, 31, 0, 'Concede aumento aos Funcionários: Efetivos, comissionados, aposentados, pensionistas, contratados, gratificações, pensionistas e dá outras providências', '1990', '1990-06-15', '951eb73edcc906e3e5f33c1bdc8ccca7.pdf', 'Lei Nº 031.pdf', '2021-01-05 15:43:59'),
(104, 33, 0, 'Dá-se o nome de Rua e adota outras providências.', '1990', '1990-06-20', 'ff8311c6e09c1aa316320092fb769895.pdf', 'Lei Nº 033.pdf', '2021-01-05 15:44:25'),
(105, 34, 0, 'Autoriza a abertura de Crédito Especial e adota outras providências.', '1990', '1990-06-20', '89dfe56b3f38fcb574ab87fa139eac60.pdf', 'Lei Nº 034.pdf', '2021-01-05 15:44:50'),
(106, 35, 0, 'Solicita autorização para alienação de bens pertences a Prefeitura, e adota outras providências.', '1990', '1990-06-20', '7e771bd0baf8f5ff7a52bc20d3c970cc.pdf', 'Lei Nº 035.pdf', '2021-01-05 15:45:16'),
(107, 36, 0, 'Institui o ESCUDO como símbolo municipal e adota outras providências.', '1990', '1990-06-27', '76056f62d452069d0dea9ab1cad1113e.pdf', 'Lei Nº 036.pdf', '2021-01-05 15:45:36'),
(108, 37, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras providências.', '1990', '1990-07-20', 'bb3961457488623cff8611d79e6a1b0e.pdf', 'Lei Nº 037.pdf', '2021-01-05 15:45:57'),
(109, 38, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1990', '1990-07-31', '7931f52bd06ad39fa877f480cce5d32f.pdf', 'Lei Nº 038.pdf', '2021-01-05 15:46:19'),
(110, 39, 0, 'Concede aumento aos Funcionários: estatutários, contratados, comissionados, gratificação, aposentados, pensionistas e adota outras providências', '1990', '1990-08-08', '01b0e8376c73c7b137b45f62b2793e2e.pdf', 'Lei Nº 039.pdf', '2021-01-05 15:47:04'),
(111, 40, 0, 'Autoriza a abertura de Crédito Suplementar e adota outas providências.', '1990', '1990-08-08', '440db9d8bf9932c13d7901e0ec1a0296.pdf', 'Lei Nº 040.pdf', '2021-01-05 15:47:24'),
(112, 41, 0, 'Dá-se nome de Rua e adota outras providências.', '1990', '1990-08-08', '979d92a4f256700a1e07560bfdc15daf.pdf', 'Lei Nº 041.pdf', '2021-01-05 15:47:49'),
(113, 42, 0, 'Dá-se o nome de Rua e adota outras providências.', '1990', '1990-08-08', 'b1bcaa4141eb9ff1cb712b41469dca7d.pdf', 'Lei Nº 042.pdf', '2021-01-05 15:48:13'),
(114, 43, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras Providências.', '1990', '1990-08-17', 'cd359351773daad86f24ba371de220f4.pdf', 'Lei Nº 043.pdf', '2021-01-05 15:48:39'),
(115, 44, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras providências.', '1990', '1990-08-17', 'cdd89c0a8c1d21bf65a66d0f24632513.pdf', 'Lei Nº 044.pdf', '2021-01-05 15:48:59'),
(116, 45, 0, 'Concede pensão e adota outras providências.', '1990', '1990-08-29', '1821515ff2b69a7cab7685969821dc9e.pdf', 'Lei Nº 045.pdf', '2021-01-05 15:49:25'),
(117, 46, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-08-11', '2acb82b83b33ea3c10d69f4da7975afa.pdf', 'Lei Nº 046.pdf', '2021-01-05 15:49:54'),
(118, 47, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-08-11', '4ca811ee27bb26e92e8d51b81df8bbb4.pdf', 'Lei Nº 047.pdf', '2021-01-05 15:50:22'),
(119, 48, 0, 'Dá-se nome de rua e adota outras previdências.', '1990', '1990-08-11', 'faf0014c6cbd1bd24faa466ee191fa23.pdf', 'Lei Nº 048.pdf', '2021-01-05 15:50:43'),
(120, 49, 0, 'Autoriza abertura de crédito Suplementar e adota outras providências.', '1990', '1990-09-19', '25fbe654198fffa228887d5b60b604d4.pdf', 'Lei Nº 049.pdf', '2021-01-05 15:51:02'),
(121, 50, 0, 'Concede pensão e adota outras providências.', '1990', '1990-09-19', '57e35e93dcf8a3815a1a2ef2c3d2efcf.pdf', 'Lei Nº 050.pdf', '2021-01-05 15:51:22'),
(122, 51, 0, 'Dá-se nome de Rua e adota outras providências.', '1990', '1990-09-19', '138a17ccf35c81e24b5fed5f8d0afabd.pdf', 'Lei Nº 051.pdf', '2021-01-05 15:52:13'),
(123, 52, 0, 'Autoriza abertura de crédito suplementar e adota outras providências.', '1990', '1990-09-25', 'bf468c8dd76fbfb393d8638fed903509.pdf', 'Lei Nº 052.pdf', '2021-01-05 15:52:45'),
(124, 53, 0, 'Autoriza abertura de crédito suplementar e adota outras providências.', '1990', '1990-10-11', '557da7ee6c1eb52bc0bc7f61f8b52554.pdf', 'Lei Nº 053.pdf', '2021-01-05 15:53:11'),
(125, 54, 0, 'Autoriza abertura de crédito suplementar e adota outras providências.', '1990', '1990-10-11', '3a6348efa65da0257ad3df8d929c3e54.pdf', 'Lei Nº 054.pdf', '2021-01-05 16:22:57'),
(126, 55, 0, 'Autoriza abertura de crédito suplementar e adota outras providências.', '1990', '1990-10-19', 'e69669a30bb8410d90de5fb09372f041.pdf', 'Lei Nº 055.pdf', '2021-01-05 16:23:17'),
(127, 56, 0, 'Dá-se nome de rua e adota outras providências.', '1990', '1990-11-07', '1b924bf02342338fd4c6c54cbef343bd.pdf', 'Lei Nº 056.pdf', '2021-01-05 16:24:14'),
(128, 57, 0, 'Autoriza a Prefeitura Municipal a vender e alugar jazigos do cemitério Público desta cidade.', '1990', '1990-11-21', 'ab94b2995ca71f05a3cf8375efd9e3ca.pdf', 'Lei Nº 057.pdf', '2021-01-05 16:24:37'),
(129, 58, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1990', '1990-11-21', 'e35f23b8cfea8c5e34075f62b4edcf4a.pdf', 'Lei Nº 058.pdf', '2021-01-05 16:25:01'),
(130, 59, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1990', '1990-12-03', 'd35ba9915c654a0fe0261e7840c30bee.pdf', 'Lei Nº 059.pdf', '2021-01-05 16:25:26'),
(131, 60, 0, 'Dá-se nome de Rua e adota outras providências.', '1990', '1990-12-03', 'a31649752b4103e729b0b7e18946fadb.pdf', 'Lei Nº 060.pdf', '2021-01-05 16:25:48'),
(132, 61, 0, 'Aprova o Orçamento Anual do Município do Surubim, para o exercício financeiro de 1991, e adota outras providências.', '1990', '1990-12-03', 'cb2c89bb3fe9cf7b6bff8aaba27722e7.pdf', 'Lei Nº 061.pdf', '2021-01-05 16:26:08'),
(133, 62, 0, 'Dispõe sobre o orçamento plurianual de Investimento relativo ao triânio de 1991 a 1993 nos termos da legislação em vigor.', '1990', '1990-12-03', '1836f3feba8a0d13af6a556509b9fd91.pdf', 'Lei Nº 062.pdf', '2021-01-05 16:26:46'),
(134, 63, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1990', '1990-12-11', '4476ecb100ce97d2065bd6f19a40b6fb.pdf', 'Lei Nº 063.pdf', '2021-01-05 16:27:09'),
(135, 64, 0, 'Fixa novos valores para base de cálculo de tributos para exercício de 1991', '1990', '1990-12-19', '245ba2d85e7d804bf04f4e2413dfa7e2.pdf', 'Lei Nº 064.pdf', '2021-01-05 16:27:29'),
(136, 65, 0, 'Atribui denominação a prédio público e dá outras providências.', '1990', '1990-12-19', '04b7c5508fc20c13e8f96ba5793101d3.pdf', 'Lei Nº 065.pdf', '2021-01-05 16:27:47'),
(137, 1, 0, 'Concede aumento aos funcionários estatutários, contratados, comissionados, gratificações, aposentados, pensionistas e adota outras providências.', '1991', '1991-02-14', '9a4d93a46bda55349012ce61415db499.pdf', 'Lei Nº 001.pdf', '2021-01-05 16:29:17'),
(138, 2, 0, 'Dá-se nome de rua e adota outra providências.', '1991', '1991-02-20', 'e5be9b8939a34204556900e2761da401.pdf', 'Lei Nº 002.pdf', '2021-01-05 16:29:35'),
(139, 3, 0, 'Dá-se nome de rua e adota outra providências.', '1991', '1991-02-20', '82c89b68fabedde8438c0a7a901f8d86.pdf', 'Lei Nº 003.pdf', '2021-01-05 16:29:58'),
(140, 4, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-12-20', '17a54ca828c61831cbea4d9e3437fe31.pdf', 'Lei Nº 004.pdf', '2021-01-05 16:30:20'),
(141, 5, 0, 'Dá-se nome de rua e adota outra providências.', '1991', '1991-12-20', '63f61cbe2ff2612c3ab78c96aeff15e2.pdf', 'Lei Nº 005.pdf', '2021-01-05 16:30:39'),
(142, 6, 0, 'concede pensão e adota outras providências.', '1991', '1991-03-06', '169d1e185277ba08441e699be267398f.pdf', 'Lei Nº 006.pdf', '2021-01-05 16:30:58'),
(143, 7, 0, 'Cria cargo de técnico em Contabilidade PE-13 e extingue cargo de Agente Administrativo PE-12, do quadro de pessoal vigente.', '1991', '1991-03-13', 'd8cc963b3c22cc4eb7f9f78a7bd5d20b.pdf', 'Lei Nº 007.pdf', '2021-01-05 16:31:27'),
(144, 8, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-12-21', 'ffc9da01ae866a3213f2f8f1d8a26456.pdf', 'Lei Nº 008.pdf', '2021-01-05 16:31:54'),
(145, 9, 0, 'Institui a comissão municipal da defesa civil - COMDEC, e adota outras providências.', '1991', '1991-03-21', '8aee46afb2fcacdf2e570c885bb61ad6.pdf', 'Lei Nº 009.pdf', '2021-01-05 16:32:26'),
(146, 10, 0, 'Autoriza a abertura de Crédito Suplementar e adota outras providências.', '1991', '1991-04-04', '48ef8914ebfece858d0c883c4aa10895.pdf', 'Lei Nº 010.pdf', '2021-01-05 16:32:49'),
(147, 11, 0, 'Concede aumento aos funcionários estatutários, contratados, comissionados, gratificações, aposentados, pensionistas e adota outras providências.', '1991', '1991-04-18', 'b662a1bb54c1a0a94153bb54ad868b54.pdf', 'Lei Nº 011.pdf', '2021-01-05 16:33:11'),
(148, 12, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-04-29', 'f2bdc11da3e66e4f0744706965d8c3e6.pdf', 'Lei Nº 012.pdf', '2021-01-05 16:34:02'),
(149, 13, 0, 'Dá-se nome de rua e adota outras providências.', '1991', '1991-04-29', '1185310b11f4a42f2fc195f8a4e6d002.pdf', 'Lei Nº 013.pdf', '2021-01-05 16:34:49'),
(150, 14, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-04-29', '4c958447a61679a85af82f87632ef443.pdf', 'Lei Nº 014.pdf', '2021-01-05 16:35:13'),
(151, 15, 0, 'Concede título de cidadã surubinense e adota outras providências.', '1991', '1991-04-29', '04bcb7a525dea1e5640df73b8d33689b.pdf', 'Lei Nº 015.pdf', '2021-01-05 16:35:36'),
(152, 16, 0, 'Dá-se nome de rua e adota outras previdências.', '1991', '1991-05-03', 'f6f6a4ff533901813fc181e85e77f3e3.pdf', 'Lei Nº 016.pdf', '2021-01-05 16:35:57'),
(153, 17, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-05-09', '15b4491c8c6f2cc8bc63c5a3cc845538.pdf', 'Lei Nº 017.pdf', '2021-01-05 16:36:17'),
(154, 18, 0, 'Doa terreno e adota outras providências.', '1991', '1991-05-09', 'ea39a5b53bf0ff4fc40742e0a5ae2001.pdf', 'Lei Nº 018.pdf', '2021-01-05 16:37:16'),
(155, 20, 0, 'Autoriza a abertura de crédito especial e adota outras providências.', '1991', '1991-05-17', '0ba03a7cc7d74bacad9f1eb9a8df9473.pdf', 'Lei Nº 020.pdf', '2021-01-05 16:37:58'),
(156, 21, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-05-29', 'd8618cce892f4e66ac19474833c9b6ae.pdf', 'Lei Nº 021.pdf', '2021-01-05 16:38:32'),
(157, 22, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-06-06', 'b445eed486359326f591862541009af5.pdf', 'Lei Nº 022.pdf', '2021-01-05 16:39:08'),
(158, 23, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-06-20', 'e1ba33d34a3737fd9b47fa743496bd23.pdf', 'Lei Nº 023.pdf', '2021-01-05 16:39:28'),
(159, 24, 0, 'Autoriza a abertura de crédito especial e adota outras providências.', '1991', '1991-06-20', '93cd0611282035ee017de995de0f1cad.pdf', 'Lei Nº 024.pdf', '2021-01-05 16:39:47'),
(160, 25, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-07-18', '03775d79e6f6190adf27a70219375038.pdf', 'Lei Nº 025.pdf', '2021-01-05 17:04:02'),
(161, 26, 0, 'Autoriza o Poder executivo municipal a contratar parcelamento de dívida para com o fundo de garantia de tempo de serviço - FGTS, e adota outras providências.', '1991', '1991-07-19', '265a57a7deed2b6e5d067051d888df34.pdf', 'Lei Nº 026.pdf', '2021-01-05 17:04:20'),
(162, 27, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-08-08', '33ce3c485398392e0d00335f5c70e40f.pdf', 'Lei Nº 027.pdf', '2021-01-05 17:04:45'),
(163, 28, 0, 'Institui o Fundo Municipal de saúde e adota outras providências.', '1991', '1991-08-16', '1e2bb02760fdd6cb7a80e8bd3d398f20.pdf', 'Lei Nº 028.pdf', '2021-01-05 17:05:22'),
(164, 29, 0, 'Cria o Conselho Municipal de saúde e adota outras providências.', '1991', '1991-08-16', 'f878fd658f396523a4dd27253f4e3638.pdf', 'Lei Nº 029.pdf', '2021-01-05 17:05:44'),
(165, 31, 0, 'Concede pensão e adota outras providências.', '1991', '1991-08-22', '267346c4f6d5e8e497f0b1726eea1e42.pdf', 'Lei Nº 031.pdf', '2021-01-05 17:06:04'),
(166, 32, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-08-22', 'fd7d33091285db5c9f20b95d0c6beb48.pdf', 'Lei Nº 032.pdf', '2021-01-05 17:06:32'),
(167, 33, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-08-28', '50591cb3f82e853e3a58a24f01ba9bb7.pdf', 'Lei Nº 033.pdf', '2021-01-05 17:07:04'),
(168, 34, 0, 'dá-se nome da rua e adota outras providências.', '1991', '1991-08-28', '94c973dbcf894b2a9026f0c93380af2a.pdf', 'Lei Nº 034.pdf', '2021-01-05 17:07:21'),
(169, 35, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-08-28', 'c6693e1b8337254d8319516d5a41d246.pdf', 'Lei Nº 035.pdf', '2021-01-05 17:07:49'),
(170, 36, 0, 'dá-se nome de rua e adota outra providência', '1991', '1991-08-29', '981d75bb6b8bbf63834f0ddb872da06a.pdf', 'Lei Nº 036.pdf', '2021-01-05 17:08:07'),
(171, 37, 0, 'Regulamenta o artigo 2º, do ato das Disposições orgânicas transitórias, e dá outras providências.', '1991', '1991-09-06', '8e8cd70fadf0a41b95f630625b21faba.pdf', 'Lei Nº 037.pdf', '2021-01-05 17:08:26'),
(172, 38, 0, 'Doa terreno e adota outras providências.', '1991', '1991-09-13', '813e247f4b983f6a624d370a0ed2e977.pdf', 'Lei Nº 038.pdf', '2021-01-05 17:08:51'),
(173, 39, 0, 'Concede aumento aos funcionários estatutários, contratados, comissionados, gratificações, aposentados, pensionistas e adota outras providências.', '1991', '1991-09-09', 'bc95f47ae4d7b985fb7cfc5fb675f500.pdf', 'Lei Nº 039.pdf', '2021-01-05 17:09:11'),
(174, 40, 0, 'Autoriza a abertura de crédito Suplementar e adota outras providências.', '1991', '1991-09-18', '6dbdd4090a19ec5a5c110e6bfd3c911d.pdf', 'Lei Nº 040.pdf', '2021-01-05 17:09:35'),
(175, 41, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-09-18', 'a7256021bc96dab73b5a7edb6de45b5a.pdf', 'Lei Nº 041.pdf', '2021-01-05 17:09:56'),
(176, 42, 0, 'dá-se o nome de rua e adota outras providências.', '1991', '1991-09-18', '2242fa1b3727fe45f262afacd8cbe16d.pdf', 'Lei Nº 042.pdf', '2021-01-05 17:10:17'),
(177, 43, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1991', '1991-10-09', '1698d5e5227c7c86aeab0077ceb69632.pdf', 'Lei Nº 043.pdf', '2021-01-05 17:10:40'),
(178, 44, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1991', '1991-10-25', '473a549dd4eb9767a8ae11232e8e580b.pdf', 'Lei Nº 044.pdf', '2021-01-05 17:11:17'),
(179, 45, 0, 'Autoriza o Poder Executivo Municipal a contratar financiamento com a caixa econômica federal, a oferecer garantias e dá providências correlatas.', '1991', '1991-11-08', 'b33d1e8f608deed04c19f30282fbe25d.pdf', 'Lei Nº 045.pdf', '2021-01-05 17:11:38'),
(180, 46, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-11-13', '8dc58c4eb01347afeba6662c6798204d.pdf', 'Lei Nº 046.pdf', '2021-01-05 17:11:55'),
(181, 47, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1991', '1991-11-13', '2626dfcb2f04942ad69221bccb9684c5.pdf', 'Lei Nº 047.pdf', '2021-01-05 17:12:39'),
(182, 48, 0, 'Acrescenta incisos ao Art. 95 da Lei Orgânica do Município e dá outras providências.', '1991', '1991-11-13', '1f096550130be319020f549180d682ff.pdf', 'Lei Nº 048.pdf', '2021-01-05 17:13:06'),
(183, 49, 0, 'Altera os Artigos 1º, 2º e suprime o Art. 4º da lei 045/91 e dá outras providências.', '1991', '1991-11-22', '6d94c0d13b13d5925e9dc2b4d9741c79.pdf', 'Lei Nº 049.pdf', '2021-01-05 17:13:29'),
(184, 50, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-11-22', '3eca9c76a7cff5b402ddb2fede9d124b.pdf', 'Lei Nº 050.pdf', '2021-01-05 17:14:20'),
(185, 51, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-11-22', '91f4703cc7a665196bf55607fd2e0e3d.pdf', 'Lei Nº 051.pdf', '2021-01-05 17:14:48'),
(186, 52, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-11-28', '459e7d6727fab581b8a540d80155ad24.pdf', 'Lei Nº 052.pdf', '2021-01-05 17:15:11'),
(187, 53, 0, 'Autoriza a abertura de crédito especial e adota outras providências.', '1991', '1991-11-28', '6a85d819e1a138753a3ae05cb6cbd0cb.pdf', 'Lei Nº 053.pdf', '2021-01-05 17:15:31'),
(188, 54, 0, 'Autoriza o chefe do poder executivo alterar artigo de lei', '1991', '1991-11-28', '1d540485b5843ccca0758c9be300963e.pdf', 'Lei Nº 054.pdf', '2021-01-05 17:15:54'),
(189, 55, 0, 'dá-se nome de rua e adota outras providências.', '1991', '1991-11-28', '799715d8811318f038d9a6f5ee7a8d8d.pdf', 'Lei Nº 055.pdf', '2021-01-05 17:16:26'),
(190, 56, 0, 'Dá-se o nome de Rua e adota outras providências.', '1991', '1991-11-28', '08a7f2d3ce32eb3cfc66f0a3ecf44bfd.pdf', 'Lei Nº 056.pdf', '2021-01-05 17:16:49'),
(191, 57, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências.', '1991', '1991-12-13', '3bc3b1c719721097541bbbfc60ff1791.pdf', 'Lei Nº 057.pdf', '2021-01-05 17:17:23'),
(192, 59, 0, 'Autoriza a abertura de Crédito Suplementar e dá outras providências.', '1991', '1991-12-13', '3ea5263a12d5edb95c7580c1b89c9715.pdf', 'Lei Nº 059.pdf', '2021-01-05 17:17:55'),
(193, 60, 0, 'Aprova o orçamento anual do município do surubim, para o exercício financeiro de 1992, e dá outras providências.', '1991', '1991-12-25', '2a77403afe7b1cdf57048c1c628df567.pdf', 'Lei Nº 060.pdf', '2021-01-05 17:18:16'),
(194, 61, 0, 'Dispõe sobre o orçamento plurianual de Investimento relativo ao triênio de 1990 a 1994 nos termos da legislação em vigor.', '1991', '1991-12-25', '981e4ee4d3ab978668c2ac3e909486ce.pdf', 'Lei Nº 061.pdf', '2021-01-05 17:19:28'),
(195, 62, 0, 'Autoriza a abertura de crédito suplementar e adota outras providências', '1991', '1991-12-25', '4f83e3e03ec67b42d89a8f8096f3ac3b.pdf', 'Lei Nº 062.pdf', '2021-01-05 17:19:49'),
(196, 1, 0, 'Autoriza a abertura de crédito Especial e adota outras providências.', '1992', '1992-02-11', '20bad6268595cf9e4597268724ec9a04.pdf', 'Lei Nº 001.pdf', '2021-01-05 21:23:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `password`, `token`) VALUES
(7, 'Hugo Pascoal Brito e Silva', 'd49353fb89757fef34fd3a0c5d369b2b.jpg', 'hugo_pascoal_@hotmail.com', '$2y$10$k1mCgsH6sumnTZUZHCK5VebV9mYOA3biYNNaCHl181klSlGUeQoWS', 'c1231414ad887db496e66003d25ff271'),
(9, 'Usuário Teste', 'c2c0c0592f6ebce92156a3f294071162.png', 'usuario@usuario.com', '$2y$10$u.JhDxlYas5t4zjl9U9nK.UqZquD2vEP85bfE5dtrnjWDhsT0OBIq', '6b04ce123c020a5c33de52e3dbd01325');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veres`
--

CREATE TABLE `veres` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mesa` int(1) NOT NULL,
  `cargo_mesa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `partido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci NOT NULL,
  `ano_eleitoral` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `naturalidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado_civil` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FileName` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `OriginalName` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `veres`
--

INSERT INTO `veres` (`id`, `nome`, `mesa`, `cargo_mesa`, `partido`, `descricao`, `ano_eleitoral`, `data_nasc`, `naturalidade`, `estado_civil`, `escolaridade`, `facebook`, `twitter`, `email`, `FileName`, `OriginalName`) VALUES
(35, 'Fabrício Gonçalves De Brito', 1, 'Presidente', 'PSB', 'Fabrício Gonçalves De Brito foi reeleito para o mandato 2016-2020, faz parte da mesa diretora e ocupa o cargo de Presidente', '2016', '1964-10-18', 'PE-SURUBIM', ' Casado(a)', ' Ensino Médio incompleto', 'Não foi informado', 'Não foi informado', 'Não foi informado', 'e98e494974709f90ec5691698bf95ba6.jpeg', 'fabricio.jpeg'),
(36, 'Luciano Medeiros Filho', 1, '1º Vice-Presidente', ' PSB', 'Luciano Medeiros Filho foi reeleito para o mandato 2016-2020, ocupando o cargo na mesa Diretora de 1º Vice-Presidente', '2016', '1969-05-10', ' PE-SURUBIM', 'Divorciado(a)', ' Ensino Médio completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', 'f4cbd5034dd5e3f912a5b15331b250bc.jpeg', 'luciano1.jpeg'),
(37, 'Rosélia Maria Dos Anjos e Silva', 1, '2º Vice-Presidente', 'PSB', 'Rosélia Maria Dos Anjos e Silva foi reeleita para o mandato 2016-2020', '2016', '1966-04-06', 'PE-SURUBIM', 'Casado(a)', 'Ensino Fundamental completo', 'Não foi informado', 'Não foi informado', 'roselia@camarasurubim.pe.gov.br', '6d9e6d4c6e7ac21cc514e79d7c2ffb84.jpeg', 'roselia.jpeg'),
(39, 'Frederico Jorge Gomes Lafayette', 1, '1º Secretário', 'PDT', 'Frederico Jorge Gomes Lafayette foi eleito para o mandato 2016-2020', '2016', '1958-04-23', 'PE-RECIFE', 'Casado(a)', 'Superior completo', 'Não foi informado', 'Não foi informado', 'frederico@camarasurubim.pe.gov.br', '27abeac6364a81058c657faf2b77f20d.jpeg', 'frederico.jpeg'),
(40, 'Geraldo Severino Lira Da Silva', 1, '', 'PDT', 'Geraldo Severino Lira Da Silva foi eleito para o mandato 2016-2020', '2016', '1968-04-08', 'PE-SURUBIM', 'Casado(a)', 'Ensino Fundamental completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', '09a35038bdf2eab7e6b303ab9feac003.jpeg', 'geraldo.jpeg'),
(41, 'Anabel Alves Negromente', 1, '', 'PDT', 'Sem descrição', '2016', '1976-07-23', 'PE-SURUBIM', 'Solteiro(a)', 'Superior completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', '887c35b3808142e0459db78bb08ae439.jpeg', 'anabel.jpeg'),
(42, 'Itamar Carlos Pereira', 1, '', 'PR', ' ', '2016', '1987-04-12', 'PE-SURUBIM', 'Casado(a)', 'Ensino Fundamental completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', '2f7f885e19b2d4b70fb5c17bd7564df0.jpeg', 'itamar.jpeg'),
(43, 'Ivete Ramos Da Silva Pereira', 1, '', 'PT', ' ', '2016', '1974-11-17', 'PE-SURUBIM', 'Casado(a)', ' Ensino Médio completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', 'a463cf28a3d1d99b0f0fe71b4ec8e78f.jpeg', 'ivete.jpeg'),
(44, 'Josefa Albanice De Aguiar', 1, '', 'PTB', ' ', '2016', '1968-06-25', 'PE-SURUBIM', 'Solteiro(a)', ' Ensino Médio completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', '9eefa7602dae98c53d44b2df5eef4fac.jpeg', 'josefa.jpeg'),
(45, 'Josivaldo José Da Silva', 1, '', 'PDT', ' ', '2016', '1965-09-10', 'PE-SURUBIM', 'Casado(a)', 'Superior completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', '129b4a952e5efcb3e56b707c667651c3.jpeg', 'josivaldo.jpeg'),
(46, 'Marco Negromonte Da Silva', 1, '', 'PSDB', ' ', '2016', '1975-01-18', 'PE-SURUBIM', 'Casado(a)', ' Ensino Médio completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', 'bc708d4f232578fd1e11dd74d28a15b2.jpeg', 'marco.jpeg'),
(47, 'Micherlan Wellington Arruda Do Rego', 1, '', 'PDT', ' ', '2016', '1998-02-27', ' PE-SURUBIM', 'Solteiro(a)', 'Ensino Fundamental completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', 'd3b3a6d5242c4671e054e30c5291ce2c.jpeg', 'micherlan.jpeg'),
(48, 'Nailton Lima De Arruda', 1, '', ' PSB', ' ', '2016', '1967-12-07', 'PE-SURUBIM', 'Casado(a)', ' Ensino Médio completo', 'Não foi informado', 'Não foi informado', 'Não foi informado', '520e7d63a1b50749f13cf6fab52527cb.jpeg', 'nailton.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `laws`
--
ALTER TABLE `laws`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veres`
--
ALTER TABLE `veres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `laws`
--
ALTER TABLE `laws`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `veres`
--
ALTER TABLE `veres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
