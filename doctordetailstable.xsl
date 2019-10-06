<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<xsl:text>&#xA;</xsl:text>
<xsl:text>&#xD;</xsl:text>
<table cellpadding="10">
<xsl:for-each select="doctor/cd">
    <tr>
      <th><xsl:value-of select="field"/></th>
	<th>:</th>
      <td><xsl:value-of select="value"/></td>
    </tr>
    </xsl:for-each>
</table>

</xsl:template>
</xsl:stylesheet>