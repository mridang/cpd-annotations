<?xml version="1.0" encoding="UTF-8"?>
<pmd-cpd>
  <duplication lines="33" tokens="78">
    <file path="/home/runner/work/nosto-magento/nosto-magento/app/code/community/Nosto/Tagging/sql/tagging_setup/mysql4-upgrade-1.1.7-1.2.0.php" line="45"/>
    <file path="/home/runner/work/nosto-magento/nosto-magento/app/code/community/Nosto/Tagging/sql/tagging_setup/mysql4-install-1.2.0.php" line="41"/>
    <codefragment>
    -&gt;addColumn(
        'customer_id', Varien_Db_Ddl_Table::TYPE_INTEGER, 10, array(
            'unsigned' =&gt; true,
            'nullable' =&gt; false,
            'primary' =&gt; true,
            'identity' =&gt; true
        )
    )
    </codefragment>
  </duplication>
</pmd-cpd>
