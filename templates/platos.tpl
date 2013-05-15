{extends file="layout.tpl"}

{block name="title"} Platos | {$app_name}{/block}
{block name="content"}
  <table class = contacto>
    <tr>
      <td>Plato</td>
      <td>Descripción</td>
      <td>Precio</td>
    </tr>
    {foreach $platos as $plato }
      <tr>
        <td>{$plato['name']}</td>
        <td>{$plato['description']}</td>
        <td>{$plato['price']}</td>
      </tr>
    {/foreach}
  </table>
{/block}