<?php

interface publicacao{
  function abrir();
  function fechar();
  function folhear($pagina);
  function avancarPag();
  function voltarPag();
}