<?php

interface publicacao{
  function abrir();
  function fechar();
  function folhear();
  function avancarPag();
  function voltarPag();
}