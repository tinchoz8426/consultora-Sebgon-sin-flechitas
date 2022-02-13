/////////////////////////////////////////////////////////////////////////////
// Function : NavNode (constructor)
// Comments :
/////////////////////////////////////////////////////////////////////////////
function NavNode(id, label, href, parent)
{
	this.m_parent = null;
	this.m_level = 0;

	if (parent)
	{
		this.m_parent = parent;
		this.m_level = parent.m_level+1;
	}

	this.m_id = id;

	// assume that m_label will most often be used directly as HTML
	this.m_rawlabel = label;

	label = label.replace(/&/g, '&amp;');
	label = label.replace(/</g, '&lt;');
	label = label.replace(/>/g, '&gt;');
	label = label.replace(/"/g, '&quot;');

	this.m_label = label;

	this.m_href = href;
	this.m_subNodes = new Array();

	var argValues = NavNode.arguments;
	var argCount = NavNode.arguments.length;

	for (i = 4 ; i < argCount ; i++)
	{
		var eqPos = argValues[i].indexOf("==");
		var attrName = argValues[i].substring(0,eqPos);
		var attrValue = argValues[i].substring(eqPos+2);

		eval("this.cp_" + attrName + " = '" + attrValue + "';");
	}

	NavNode.prototype.addNode = addNode;
	NavNode.prototype.isSelected = isSelected;
}

/////////////////////////////////////////////////////////////////////////////
// Function : addNode
// Comments :
/////////////////////////////////////////////////////////////////////////////
function addNode(id, label, href)
{
	var newIndex = this.m_subNodes.length;
	var newNode = new NavNode(id, label, href, this);

	var argValues = addNode.arguments;
	var argCount = addNode.arguments.length;

	for (i = 3 ; i < argCount ; i++)
	{
		var eqPos = argValues[i].indexOf("==");
		var attrName = argValues[i].substring(0,eqPos);
		var attrValue = argValues[i].substring(eqPos+2);

		eval("newNode.cp_" + attrName + " = '" + attrValue + "';");
	}

	this.m_subNodes[newIndex] = newNode;
	return newNode;
}

/////////////////////////////////////////////////////////////////////////////
// Function : isSelected
// Comments :
/////////////////////////////////////////////////////////////////////////////
function isSelected()
{
    var pos = window.location.href.lastIndexOf("/");
    var docname = window.location.href.substring(pos+1, window.location.href.length);

    pos = this.m_href.lastIndexOf("/");
    var myname = this.m_href.substring(pos+1, this.m_href.length);

    if (docname == myname)
		return true;
	else
		return false;
}

/////////////////////////////////////////////////////////////////////////////
// Function : customSectionPropertyExists
// Comments :
/////////////////////////////////////////////////////////////////////////////
function customSectionPropertyExists(csp)
{
	return (typeof csp != _U && csp != null);
}

/////////////////////////////////////////////////////////////////////////////
// Function : getCustomSectionProperty
// Comments :
/////////////////////////////////////////////////////////////////////////////
function getCustomSectionProperty(csp)
{
	if (customSectionPropertyExists(csp))
	{
		return csp;
	}
	else
	{
		return "";
	}
}

/////////////////////////////////////////////////////////////////////////////

var g_navNode_Root = new NavNode('1','Worldwide',ssUrlPrefix + 'index.htm',null);
g_navNode_3=g_navNode_Root.addNode('2427','INDUSTRY INSIGHTS',ssUrlPrefix + 'industry/index.htm');
g_navNode_3_0=g_navNode_3.addNode('2431','Customer Voices',ssUrlPrefix + 'industry/customer-voices/index.htm','secondaryUrlVariableField==creative_detail');
g_navNode_3_1=g_navNode_3.addNode('2430','Market Trends',ssUrlPrefix + 'industry/market-trends/index.htm','secondaryUrlVariableField==creative_detail');
g_navNode_3_2=g_navNode_3.addNode('2432','Moving Forward',ssUrlPrefix + 'industry/moving-forward/index.htm','secondaryUrlVariableField==creative_detail');
g_navNode_3_3=g_navNode_3.addNode('2433','Huawei Voices',ssUrlPrefix + 'industry/huawei-voices/index.htm','secondaryUrlVariableField==creative_detail');
g_navNode_3_4=g_navNode_3.addNode('2434','Standards \x26 Contributions',ssUrlPrefix + 'industry/standards-contributions/index.htm','secondaryUrlVariableField==creative_detail');
g_navNode_4=g_navNode_Root.addNode('2444','carrier',ssUrlPrefix + 'carrier/index.htm');
g_navNode_6=g_navNode_Root.addNode('2','Solutions',ssUrlPrefix + 'solutions/index.htm');
g_navNode_6_0=g_navNode_6.addNode('6','Go greener',ssUrlPrefix + 'solutions/go-greener/index.htm','secondaryUrlVariableField==article');
g_navNode_6_1=g_navNode_6.addNode('3','Arpu up',ssUrlPrefix + 'solutions/arpu-up/index.htm','secondaryUrlVariableField==article');
g_navNode_6_2=g_navNode_6.addNode('4','Broader \x2b smarter',ssUrlPrefix + 'solutions/broader-smarter/index.htm','secondaryUrlVariableField==article');
g_navNode_6_3=g_navNode_6.addNode('5','Costs down',ssUrlPrefix + 'solutions/costs-down/index.htm','secondaryUrlVariableField==article');
g_navNode_7=g_navNode_Root.addNode('7','Products',ssUrlPrefix + 'products/index.htm');
g_navNode_7_0=g_navNode_7.addNode('10','Radio Access',ssUrlPrefix + 'products/radio-access/index.htm');
g_navNode_7_0_0=g_navNode_7_0.addNode('59','SingleBTS',ssUrlPrefix + 'products/radio-access/signleran/index.htm');
g_navNode_7_0_1=g_navNode_7_0.addNode('29','Multi-mode BSC',ssUrlPrefix + 'products/radio-access/multi-mode-bsc/index.htm');
g_navNode_7_1=g_navNode_7.addNode('11','Fixed Access',ssUrlPrefix + 'products/fixed-access/index.htm');
g_navNode_7_1_0=g_navNode_7_1.addNode('32','FTTx',ssUrlPrefix + 'products/fixed-access/fttx/index.htm');
g_navNode_7_1_0_0=g_navNode_7_1_0.addNode('66','OLT',ssUrlPrefix + 'products/fixed-access/fttx/olt/index.htm','externalUrl==/en/products/fixed-access/fttx/olt/ma5600t/index.htm');
g_navNode_7_1_0_0_0=g_navNode_7_1_0_0.addNode('447','MA5600T',ssUrlPrefix + 'products/fixed-access/fttx/olt/ma5600t/index.htm');
g_navNode_7_1_0_1=g_navNode_7_1_0.addNode('67','MxU',ssUrlPrefix + 'products/fixed-access/fttx/mxu/index.htm');
g_navNode_7_1_0_1_0=g_navNode_7_1_0_1.addNode('10608','MA5611S',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5611s/index.htm');
g_navNode_7_1_0_1_1=g_navNode_7_1_0_1.addNode('448','MA5612',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5612/index.htm');
g_navNode_7_1_0_1_2=g_navNode_7_1_0_1.addNode('412','MA5616',ssUrlPrefix + 'products/fixed-access/fttx/mxu/MA5616/index.htm');
g_navNode_7_1_0_1_3=g_navNode_7_1_0_1.addNode('449','MA5620',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5620/index.htm');
g_navNode_7_1_0_1_4=g_navNode_7_1_0_1.addNode('10609','MA5622A/23/23A',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5622a2323a/index.htm');
g_navNode_7_1_0_1_5=g_navNode_7_1_0_1.addNode('450','MA5626',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5626/index.htm');
g_navNode_7_1_0_1_6=g_navNode_7_1_0_1.addNode('10610','MA5631/32',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma563132/index.htm');
g_navNode_7_1_0_1_7=g_navNode_7_1_0_1.addNode('10611','MA5633',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5633/index.htm');
g_navNode_7_1_0_1_8=g_navNode_7_1_0_1.addNode('10612','MA5650 Series',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5650/index.htm');
g_navNode_7_1_0_1_9=g_navNode_7_1_0_1.addNode('10630','MA5670 Series',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5670/index.htm');
g_navNode_7_1_0_1_10=g_navNode_7_1_0_1.addNode('10631','MA5690 Series',ssUrlPrefix + 'products/fixed-access/fttx/mxu/ma5690/index.htm');
g_navNode_7_1_0_1_11=g_navNode_7_1_0_1.addNode('10632','PoE',ssUrlPrefix + 'products/fixed-access/fttx/mxu/poe/index.htm');
g_navNode_7_1_0_1_12=g_navNode_7_1_0_1.addNode('10634','Reverse PoE',ssUrlPrefix + 'products/fixed-access/fttx/mxu/reverse-poe/index.htm');
g_navNode_7_1_0_2=g_navNode_7_1_0.addNode('68','ONT',ssUrlPrefix + 'products/fixed-access/fttx/ont/index.htm');
g_navNode_7_1_0_2_0=g_navNode_7_1_0_2.addNode('452','HG861',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg861/index.htm');
g_navNode_7_1_0_2_1=g_navNode_7_1_0_2.addNode('453','HG863',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg863/index.htm');
g_navNode_7_1_0_2_2=g_navNode_7_1_0_2.addNode('454','HG8010',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8010/index.htm');
g_navNode_7_1_0_2_3=g_navNode_7_1_0_2.addNode('455','HG8110',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8110/index.htm');
g_navNode_7_1_0_2_4=g_navNode_7_1_0_2.addNode('456','HG8240',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8240/index.htm');
g_navNode_7_1_0_2_5=g_navNode_7_1_0_2.addNode('457','HG8242',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8242/index.htm');
g_navNode_7_1_0_2_6=g_navNode_7_1_0_2.addNode('458','HG8245',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8245/index.htm');
g_navNode_7_1_0_2_7=g_navNode_7_1_0_2.addNode('459','HG8247',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8247/index.htm');
g_navNode_7_1_0_2_8=g_navNode_7_1_0_2.addNode('460','HG8447',ssUrlPrefix + 'products/fixed-access/fttx/ont/hg8447/index.htm');
g_navNode_7_1_1=g_navNode_7_1.addNode('69','Fiber Infrastructure',ssUrlPrefix + 'products/fixed-access/fiber/index.htm');
g_navNode_7_1_1_0=g_navNode_7_1_1.addNode('462','ODF',ssUrlPrefix + 'products/fixed-access/fiber/odf/index.htm');
g_navNode_7_1_1_1=g_navNode_7_1_1.addNode('463','Splice Box',ssUrlPrefix + 'products/fixed-access/fiber/splice-box/index.htm');
g_navNode_7_1_1_2=g_navNode_7_1_1.addNode('464','Optical Splitter',ssUrlPrefix + 'products/fixed-access/fiber/optical-splitter/index.htm');
g_navNode_7_1_1_3=g_navNode_7_1_1.addNode('465','Connecting Box',ssUrlPrefix + 'products/fixed-access/fiber/connecting-box/index.htm');
g_navNode_7_1_1_4=g_navNode_7_1_1.addNode('466','Fiber Division Box',ssUrlPrefix + 'products/fixed-access/fiber/fiber-division-box/index.htm');
g_navNode_7_1_1_5=g_navNode_7_1_1.addNode('467','Terminal Box',ssUrlPrefix + 'products/fixed-access/fiber/terminal-box/index.htm');
g_navNode_7_1_1_6=g_navNode_7_1_1.addNode('468','Weak-Current Box',ssUrlPrefix + 'products/fixed-access/fiber/weak-current-box/index.htm');
g_navNode_7_1_1_7=g_navNode_7_1_1.addNode('469','Optical Cables',ssUrlPrefix + 'products/fixed-access/fiber/optical-cables/index.htm');
g_navNode_7_1_1_8=g_navNode_7_1_1.addNode('470','Intelligent ODN',ssUrlPrefix + 'products/fixed-access/fiber/intelligent-odn/index.htm');
g_navNode_7_1_1_9=g_navNode_7_1_1.addNode('4444','iODF',ssUrlPrefix + 'products/fixed-access/fiber/odf/index.htm');
g_navNode_7_1_1_10=g_navNode_7_1_1.addNode('5298','iFDT',ssUrlPrefix + 'products/fixed-access/fiber/fdt/index.htm');
g_navNode_7_1_1_10_0=g_navNode_7_1_1_10.addNode('5299','GXF147-iFDT3103D',ssUrlPrefix + 'products/fixed-access/fiber/fdt/GXF147-iFDT3103D/index.htm');
g_navNode_7_1_1_10_1=g_navNode_7_1_1_10.addNode('5300','GXF147-iFDT3101D-A',ssUrlPrefix + 'products/fixed-access/fiber/fdt/GXF147-iFDT3101D-A/index.htm');
g_navNode_7_1_1_11=g_navNode_7_1_1.addNode('4445','iFAT',ssUrlPrefix + 'products/fixed-access/fiber/fat/index.htm');
g_navNode_7_1_1_11_0=g_navNode_7_1_1_11.addNode('5289','GPX147-iFAT3102-24',ssUrlPrefix + 'products/fixed-access/fiber/fat/GPX147-iFAT3102-24/index.htm');
g_navNode_7_1_1_11_1=g_navNode_7_1_1_11.addNode('5290','GPX147-iFAT3101-48',ssUrlPrefix + 'products/fixed-access/fiber/fat/GPX147-iFAT3101-48/index.htm');
g_navNode_7_1_1_11_2=g_navNode_7_1_1_11.addNode('5291','GPX147-iFAT3103T-16/24',ssUrlPrefix + 'products/fixed-access/fiber/fat/GPX147-iFAT3103T-1624/index.htm');
g_navNode_7_1_1_11_3=g_navNode_7_1_1_11.addNode('5292','GPX147-iFAT3105T-32/36',ssUrlPrefix + 'products/fixed-access/fiber/fat/GPX147-iFAT3105T-3236/index.htm');
g_navNode_7_1_1_11_4=g_navNode_7_1_1_11.addNode('5293','GPX147-iFAT3101TD-32/36',ssUrlPrefix + 'products/fixed-access/fiber/fat/GPX147-iFAT3101TD-3236/index.htm');
g_navNode_7_1_1_11_5=g_navNode_7_1_1_11.addNode('5294','GPX147-iFAT3103TD-F/P',ssUrlPrefix + 'products/fixed-access/fiber/fat/GPX147-iFAT3103TD-FP/index.htm');
g_navNode_7_1_1_12=g_navNode_7_1_1.addNode('4446','iField',ssUrlPrefix + 'products/fixed-access/fiber/iField/index.htm');
g_navNode_7_1_2=g_navNode_7_1.addNode('64','DSLAM',ssUrlPrefix + 'products/fixed-access/dslam/index.htm');
g_navNode_7_1_3=g_navNode_7_1.addNode('296','Multi-Service Access',ssUrlPrefix + 'products/fixed-access/multi-service/index.htm');
g_navNode_7_1_4=g_navNode_7_1.addNode('70','uniSite',ssUrlPrefix + 'products/fixed-access/unisite/index.htm');
g_navNode_7_2=g_navNode_7.addNode('13','Core Network',ssUrlPrefix + 'products/core-network/index.htm');
g_navNode_7_2_0=g_navNode_7_2.addNode('297','SingleCORE',ssUrlPrefix + 'products/core-network/singlecore/index.htm');
g_navNode_7_2_0_0=g_navNode_7_2_0.addNode('375','GU CS',ssUrlPrefix + 'products/core-network/singlecore/gu-cs/index.htm');
g_navNode_7_2_0_1=g_navNode_7_2_0.addNode('376','CDMA CS',ssUrlPrefix + 'products/core-network/singlecore/cdma-cs/index.htm');
g_navNode_7_2_0_2=g_navNode_7_2_0.addNode('111','Fixed Softswitch',ssUrlPrefix + 'products/core-network/singlecore/fixed-softswitch/index.htm');
g_navNode_7_2_0_3=g_navNode_7_2_0.addNode('379','SBC\xa0',ssUrlPrefix + 'products/core-network/singlecore/sbc/index.htm');
g_navNode_7_2_0_4=g_navNode_7_2_0.addNode('378','IMS Core',ssUrlPrefix + 'products/core-network/singlecore/ims-core/index.htm');
g_navNode_7_2_0_5=g_navNode_7_2_0.addNode('109','IMS AS',ssUrlPrefix + 'products/core-network/singlecore/ims-as/index.htm');
g_navNode_7_2_0_6=g_navNode_7_2_0.addNode('377','UMG for Mobile Voice',ssUrlPrefix + 'products/core-network/singlecore/umg/index.htm');
g_navNode_7_2_0_7=g_navNode_7_2_0.addNode('110','UMG for NGN',ssUrlPrefix + 'products/core-network/singlecore/umg-ngn/index.htm');
g_navNode_7_2_0_8=g_navNode_7_2_0.addNode('108','UMG for IMS',ssUrlPrefix + 'products/core-network/singlecore/umg-ims/index.htm');
g_navNode_7_2_1=g_navNode_7_2.addNode('51','SingleEPC',ssUrlPrefix + 'products/core-network/singleepc/index.htm');
g_navNode_7_2_1_0=g_navNode_7_2_1.addNode('104','USN',ssUrlPrefix + 'products/core-network/singleepc/usn/index.htm');
g_navNode_7_2_1_1=g_navNode_7_2_1.addNode('105','UGW',ssUrlPrefix + 'products/core-network/singleepc/ugw/index.htm');
g_navNode_7_2_1_2=g_navNode_7_2_1.addNode('102','PDSN',ssUrlPrefix + 'products/core-network/singleepc/pdsn/index.htm');
g_navNode_7_2_1_3=g_navNode_7_2_1.addNode('103','WASN',ssUrlPrefix + 'products/core-network/singleepc/wasn/index.htm');
g_navNode_7_2_2=g_navNode_7_2.addNode('50','SingleSDB',ssUrlPrefix + 'products/core-network/singlesdb/index.htm');
g_navNode_7_2_2_0=g_navNode_7_2_2.addNode('121','GU HLR9820',ssUrlPrefix + 'products/core-network/singlesdb/gu-hlr9820/index.htm');
g_navNode_7_2_2_1=g_navNode_7_2_2.addNode('122','CDMA HLR9820',ssUrlPrefix + 'products/core-network/singlesdb/cdma-hlr9820/index.htm');
g_navNode_7_2_2_2=g_navNode_7_2_2.addNode('123','HSS9820',ssUrlPrefix + 'products/core-network/singlesdb/hss9820/index.htm');
g_navNode_7_2_2_3=g_navNode_7_2_2.addNode('124','SAE-HSS9820',ssUrlPrefix + 'products/core-network/singlesdb/sae-hss9820/index.htm');
g_navNode_7_2_2_4=g_navNode_7_2_2.addNode('125','UPCC',ssUrlPrefix + 'products/core-network/singlesdb/upcc/index.htm');
g_navNode_7_2_2_5=g_navNode_7_2_2.addNode('126','UEIR',ssUrlPrefix + 'products/core-network/singlesdb/ueir/index.htm');
g_navNode_7_2_2_6=g_navNode_7_2_2.addNode('127','SG7000',ssUrlPrefix + 'products/core-network/singlesdb/sg7000/index.htm');
g_navNode_7_2_3=g_navNode_7_2.addNode('52','SmartCare',ssUrlPrefix + 'products/core-network/smartcare/index.htm');
g_navNode_7_2_3_0=g_navNode_7_2_3.addNode('106','SEQ Analyst',ssUrlPrefix + 'products/core-network/smartcare/seq-analyst/index.htm');
g_navNode_7_2_3_1=g_navNode_7_2_3.addNode('107','VisualIP',ssUrlPrefix + 'products/core-network/smartcare/visualip/index.htm');
g_navNode_7_3=g_navNode_7.addNode('93','Transport Network',ssUrlPrefix + 'products/transport-network/index.htm');
g_navNode_7_3_0=g_navNode_7_3.addNode('97','WDM/OTN',ssUrlPrefix + 'products/transport-network/wdm-otn/index.htm');
g_navNode_7_3_0_0=g_navNode_7_3_0.addNode('441','BWS 1600G',ssUrlPrefix + 'products/transport-network/wdm-otn/bws1600G/index.htm');
g_navNode_7_3_0_1=g_navNode_7_3_0.addNode('6682','OSN9800',ssUrlPrefix + 'products/transport-network/wdm-otn/osn9800/index.htm');
g_navNode_7_3_0_2=g_navNode_7_3_0.addNode('442','OSN8800',ssUrlPrefix + 'products/transport-network/wdm-otn/osn8800/index.htm');
g_navNode_7_3_0_3=g_navNode_7_3_0.addNode('443','OSN6800\x263800',ssUrlPrefix + 'products/transport-network/wdm-otn/osn6800-3800/index.htm');
g_navNode_7_3_0_4=g_navNode_7_3_0.addNode('444','OSN1800',ssUrlPrefix + 'products/transport-network/wdm-otn/osn1800/index.htm');
g_navNode_7_3_1=g_navNode_7_3.addNode('805','Hybrid MSTP',ssUrlPrefix + 'products/transport-network/hybrid-mstp/index.htm');
g_navNode_7_3_1_0=g_navNode_7_3_1.addNode('418','OSN 7500 II',ssUrlPrefix + 'products/transport-network/hybrid-mstp/osn7500II/index.htm');
g_navNode_7_3_1_1=g_navNode_7_3_1.addNode('6624','OSN 7500',ssUrlPrefix + 'products/transport-network/hybrid-mstp/osn7500/index.htm');
g_navNode_7_3_1_2=g_navNode_7_3_1.addNode('419','OSN 3500',ssUrlPrefix + 'products/transport-network/hybrid-mstp/osn3500/index.htm');
g_navNode_7_3_1_3=g_navNode_7_3_1.addNode('420','OSN 1500',ssUrlPrefix + 'products/transport-network/hybrid-mstp/osn1500/index.htm');
g_navNode_7_3_1_4=g_navNode_7_3_1.addNode('505','OSN 550',ssUrlPrefix + 'products/transport-network/hybrid-mstp/osn550/index.htm');
g_navNode_7_3_1_5=g_navNode_7_3_1.addNode('506','OSN 500',ssUrlPrefix + 'products/transport-network/hybrid-mstp/osn500/index.htm');
g_navNode_7_3_1_6=g_navNode_7_3_1.addNode('507','Metro 1000',ssUrlPrefix + 'products/transport-network/hybrid-mstp/metro1000/index.htm');
g_navNode_7_3_2=g_navNode_7_3.addNode('96','MSTP',ssUrlPrefix + 'products/transport-network/mstp/index.htm');
g_navNode_7_3_2_0=g_navNode_7_3_2.addNode('6626','OSN 9560',ssUrlPrefix + 'products/transport-network/mstp/osn9560/index.htm');
g_navNode_7_3_2_1=g_navNode_7_3_2.addNode('414','OSN 9500',ssUrlPrefix + 'products/transport-network/mstp/osn9500/index.htm');
g_navNode_7_3_2_2=g_navNode_7_3_2.addNode('415','OSN 3500 II',ssUrlPrefix + 'products/transport-network/mstp/osn3500II/index.htm');
g_navNode_7_3_2_3=g_navNode_7_3_2.addNode('416','OSN 2500',ssUrlPrefix + 'products/transport-network/mstp/osn2500/index.htm');
g_navNode_7_3_2_4=g_navNode_7_3_2.addNode('417','Metro 100',ssUrlPrefix + 'products/transport-network/mstp/metro100/index.htm');
g_navNode_7_3_3=g_navNode_7_3.addNode('98','Microwave',ssUrlPrefix + 'products/transport-network/microwave/index.htm');
g_navNode_7_3_3_0=g_navNode_7_3_3.addNode('446','RTN 900',ssUrlPrefix + 'products/transport-network/microwave/rtn900/index.htm');
g_navNode_7_3_3_1=g_navNode_7_3_3.addNode('6619','RTN380',ssUrlPrefix + 'products/transport-network/microwave/rtn380/index.htm');
g_navNode_7_3_3_2=g_navNode_7_3_3.addNode('6618','RTN 310',ssUrlPrefix + 'products/transport-network/microwave/rtn310/index.htm');
g_navNode_7_3_3_3=g_navNode_7_3_3.addNode('445','RTN 600',ssUrlPrefix + 'products/transport-network/microwave/rtn600/index.htm');
g_navNode_7_3_4=g_navNode_7_3.addNode('99','Marine Network',ssUrlPrefix + 'products/transport-network/marine/index.htm','externalUrl==http\x3a//www.huaweimarine.com','isDynamic==FALSE');
g_navNode_7_4=g_navNode_7.addNode('12','Data Communication',ssUrlPrefix + 'products/data-communication/index.htm');
g_navNode_7_4_0=g_navNode_7_4.addNode('82','NE Routers',ssUrlPrefix + 'products/data-communication/ne-routers/index.htm');
g_navNode_7_4_0_0=g_navNode_7_4_0.addNode('421','NE5000E',ssUrlPrefix + 'products/data-communication/ne-routers/ne5000e/index.htm');
g_navNode_7_4_0_1=g_navNode_7_4_0.addNode('423','NE40E',ssUrlPrefix + 'products/data-communication/ne-routers/ne40e/index.htm');
g_navNode_7_4_0_2=g_navNode_7_4_0.addNode('424','NE20E/20',ssUrlPrefix + 'products/data-communication/ne-routers/ne20e20/index.htm');
g_navNode_7_4_1=g_navNode_7_4.addNode('89','AR Routers',ssUrlPrefix + 'products/data-communication/ar-routers/index.htm');
g_navNode_7_4_1_0=g_navNode_7_4_1.addNode('434','AR1200',ssUrlPrefix + 'products/data-communication/ar-routers/ar1200/index.htm');
g_navNode_7_4_1_1=g_navNode_7_4_1.addNode('435','AR2200',ssUrlPrefix + 'products/data-communication/ar-routers/ar2200/index.htm');
g_navNode_7_4_1_2=g_navNode_7_4_1.addNode('436','AR3200',ssUrlPrefix + 'products/data-communication/ar-routers/ar3200/index.htm');
g_navNode_7_4_1_3=g_navNode_7_4_1.addNode('803','AR19',ssUrlPrefix + 'products/data-communication/ar-routers/ar19/index.htm');
g_navNode_7_4_1_4=g_navNode_7_4_1.addNode('804','AR29',ssUrlPrefix + 'products/data-communication/ar-routers/ar29/index.htm');
g_navNode_7_4_1_5=g_navNode_7_4_1.addNode('437','AR49',ssUrlPrefix + 'products/data-communication/ar-routers/ar49/index.htm');
g_navNode_7_4_1_6=g_navNode_7_4_1.addNode('438','AR18',ssUrlPrefix + 'products/data-communication/ar-routers/ar18/index.htm');
g_navNode_7_4_1_7=g_navNode_7_4_1.addNode('439','AR28',ssUrlPrefix + 'products/data-communication/ar-routers/ar28/index.htm');
g_navNode_7_4_1_8=g_navNode_7_4_1.addNode('440','AR46',ssUrlPrefix + 'products/data-communication/ar-routers/ar46/index.htm');
g_navNode_7_4_2=g_navNode_7_4.addNode('83','Metro Services Platform',ssUrlPrefix + 'products/data-communication/metro-services-platform/index.htm');
g_navNode_7_4_2_0=g_navNode_7_4_2.addNode('425','CX600',ssUrlPrefix + 'products/data-communication/metro-services-platform/cx600/index.htm');
g_navNode_7_4_3=g_navNode_7_4.addNode('7056','CloudEngine Series Data Center Switches',ssUrlPrefix + 'products/data-communication/CloudEngine-Series/index.htm');
g_navNode_7_4_3_0=g_navNode_7_4_3.addNode('7204','CE12800',ssUrlPrefix + 'products/data-communication/CloudEngine-Series/CE12800/index.htm');
g_navNode_7_4_3_1=g_navNode_7_4_3.addNode('7107','CE6800',ssUrlPrefix + 'products/data-communication/CloudEngine-Series/CE6800/index.htm');
g_navNode_7_4_3_2=g_navNode_7_4_3.addNode('7057','CE5800',ssUrlPrefix + 'products/data-communication/CloudEngine-Series/CE5800/index.htm');
g_navNode_7_4_4=g_navNode_7_4.addNode('87','Ethernet Switches',ssUrlPrefix + 'products/data-communication/ethernet-switches/index.htm');
g_navNode_7_4_5=g_navNode_7_4.addNode('84','Network Security',ssUrlPrefix + 'products/data-communication/network-security/index.htm');
g_navNode_7_4_5_0=g_navNode_7_4_5.addNode('225','Firewall \x26VPN',ssUrlPrefix + 'products/data-communication/network-security/firewall/index.htm');
g_navNode_7_4_5_0_0=g_navNode_7_4_5_0.addNode('226','Tbit Firewall Eudemon8000E-X Series',ssUrlPrefix + 'products/data-communication/network-security/firewall/e8000e/index.htm');
g_navNode_7_4_5_0_1=g_navNode_7_4_5_0.addNode('237','E1000E-X Series',ssUrlPrefix + 'products/data-communication/network-security/firewall/e1000e-x/index.htm');
g_navNode_7_4_5_0_2=g_navNode_7_4_5_0.addNode('240','E200E-X Series',ssUrlPrefix + 'products/data-communication/network-security/firewall/e200e-x/index.htm');
g_navNode_7_4_5_0_3=g_navNode_7_4_5_0.addNode('958','SVN2000/5000',ssUrlPrefix + 'products/data-communication/network-security/firewall/SVN3000/index.htm');
g_navNode_7_4_5_0_4=g_navNode_7_4_5_0.addNode('948','Huawei eLog',ssUrlPrefix + 'products/data-communication/network-security/firewall/eLog/index.htm');
g_navNode_7_4_5_1=g_navNode_7_4_5.addNode('942','Anti-DDoS System',ssUrlPrefix + 'products/data-communication/network-security/Anti-DDoSSystem/index.htm');
g_navNode_7_4_5_1_0=g_navNode_7_4_5_1.addNode('953','AntiDDoS8000 Series',ssUrlPrefix + 'products/data-communication/network-security/Anti-DDoSSystem/Anti-DDoSSPU/index.htm');
g_navNode_7_4_5_1_1=g_navNode_7_4_5_1.addNode('952','AntiDDoS1000 Series',ssUrlPrefix + 'products/data-communication/network-security/Anti-DDoSSystem/E1000E-ID/index.htm');
g_navNode_7_4_5_2=g_navNode_7_4_5.addNode('940','Intrusion Prevention System',ssUrlPrefix + 'products/data-communication/network-security/content-security/index.htm');
g_navNode_7_4_5_2_0=g_navNode_7_4_5_2.addNode('957','NIP2000/5000 Series',ssUrlPrefix + 'products/data-communication/network-security/content-security/NIP/index.htm');
g_navNode_7_4_5_3=g_navNode_7_4_5.addNode('943','Network Cache',ssUrlPrefix + 'products/data-communication/network-security/Network-Cache/index.htm');
g_navNode_7_4_5_3_0=g_navNode_7_4_5_3.addNode('951','Internet Cache',ssUrlPrefix + 'products/data-communication/network-security/Network-Cache/InternetCache/index.htm');
g_navNode_7_4_5_4=g_navNode_7_4_5.addNode('945','Terminal Security',ssUrlPrefix + 'products/data-communication/network-security/Terminal-Security/index.htm');
g_navNode_7_4_5_4_0=g_navNode_7_4_5_4.addNode('946','TSM',ssUrlPrefix + 'products/data-communication/network-security/Terminal-Security/tsm/index.htm');
g_navNode_7_4_5_4_1=g_navNode_7_4_5_4.addNode('947','DSM',ssUrlPrefix + 'products/data-communication/network-security/Terminal-Security/dsm/index.htm');
g_navNode_7_4_5_5=g_navNode_7_4_5.addNode('941','Traffic Management',ssUrlPrefix + 'products/data-communication/network-security/traffic-management/index.htm');
g_navNode_7_4_5_5_0=g_navNode_7_4_5_5.addNode('954','SIG9800-X Series',ssUrlPrefix + 'products/data-communication/network-security/traffic-management/SIG9800/index.htm');
g_navNode_7_4_5_7=g_navNode_7_4_5.addNode('944','Compliance',ssUrlPrefix + 'products/data-communication/network-security/Compliance/index.htm');
g_navNode_7_4_5_7_0=g_navNode_7_4_5_7.addNode('949','iSOC',ssUrlPrefix + 'products/data-communication/network-security/Compliance/iSoc/index.htm');
g_navNode_7_4_5_7_1=g_navNode_7_4_5_7.addNode('950','SSP/NSE',ssUrlPrefix + 'products/data-communication/network-security/Compliance/SSP/index.htm');
g_navNode_7_4_6=g_navNode_7_4.addNode('85','Multi-Service Control Gateway',ssUrlPrefix + 'products/data-communication/multi-service-control-gateway/index.htm','externalUrl==/en/products/data-communication/multi-service-control-gateway/me60/index.htm');
g_navNode_7_4_6_0=g_navNode_7_4_6.addNode('428','ME60',ssUrlPrefix + 'products/data-communication/multi-service-control-gateway/me60/index.htm');
g_navNode_7_4_7=g_navNode_7_4.addNode('92','PTN',ssUrlPrefix + 'products/data-communication/packet-transmission-equipment/index.htm');
g_navNode_7_4_7_0=g_navNode_7_4_7.addNode('429','PTN 910',ssUrlPrefix + 'products/data-communication/packet-transmission-equipment/ptn910/index.htm');
g_navNode_7_4_7_1=g_navNode_7_4_7.addNode('430','PTN 950',ssUrlPrefix + 'products/data-communication/packet-transmission-equipment/ptn950/index.htm');
g_navNode_7_4_7_2=g_navNode_7_4_7.addNode('431','PTN 1900',ssUrlPrefix + 'products/data-communication/packet-transmission-equipment/ptn1900/index.htm');
g_navNode_7_4_7_3=g_navNode_7_4_7.addNode('432','PTN 3900-8',ssUrlPrefix + 'products/data-communication/packet-transmission-equipment/ptn3900-8/index.htm');
g_navNode_7_4_7_4=g_navNode_7_4_7.addNode('433','PTN 3900',ssUrlPrefix + 'products/data-communication/packet-transmission-equipment/PTN3900/index.htm');
g_navNode_7_4_8=g_navNode_7_4.addNode('1084','ATN',ssUrlPrefix + 'products/data-communication/ATN/index.htm');
g_navNode_7_5=g_navNode_7.addNode('15','Network Energy',ssUrlPrefix + 'products/energy-infrastructure/index.htm');
g_navNode_7_5_0=g_navNode_7_5.addNode('10640','Data Center Facilities',ssUrlPrefix + 'products/energy-infrastructure/data-center-facilities/index.htm');
g_navNode_7_5_0_0=g_navNode_7_5_0.addNode('10641','All-in-one container data center',ssUrlPrefix + 'products/energy-infrastructure/data-center-facilities/all-in-one-container/index.htm');
g_navNode_7_5_0_1=g_navNode_7_5_0.addNode('10642','Cluster container data center',ssUrlPrefix + 'products/energy-infrastructure/data-center-facilities/cluster-container/index.htm');
g_navNode_7_5_0_2=g_navNode_7_5_0.addNode('10643','Small modular data center',ssUrlPrefix + 'products/energy-infrastructure/data-center-facilities/small-modular/index.htm');
g_navNode_7_5_0_3=g_navNode_7_5_0.addNode('10659','Medium modular data center',ssUrlPrefix + 'products/energy-infrastructure/data-center-facilities/medium-modular/index.htm');
g_navNode_7_5_0_4=g_navNode_7_5_0.addNode('10658','Large modular data center',ssUrlPrefix + 'products/energy-infrastructure/data-center-facilities/large-modular/index.htm');
g_navNode_7_5_1=g_navNode_7_5.addNode('10463','UPS',ssUrlPrefix + 'products/energy-infrastructure/ups/index.htm');
g_navNode_7_5_1_0=g_navNode_7_5_1.addNode('10469','UPS2000-G',ssUrlPrefix + 'products/energy-infrastructure/ups/ups2000g/index.htm');
g_navNode_7_5_1_1=g_navNode_7_5_1.addNode('10470','UPS5000-E',ssUrlPrefix + 'products/energy-infrastructure/ups/ups5000e/index.htm');
g_navNode_7_5_1_2=g_navNode_7_5_1.addNode('10471','UPS5000-P',ssUrlPrefix + 'products/energy-infrastructure/ups/ups5000p/index.htm');
g_navNode_7_5_1_3=g_navNode_7_5_1.addNode('10472','UPS8000-D',ssUrlPrefix + 'products/energy-infrastructure/ups/ups8000d/index.htm');
g_navNode_7_5_2=g_navNode_7_5.addNode('6704','Site power',ssUrlPrefix + 'products/energy-infrastructure/site-power/index.htm');
g_navNode_7_5_2_0=g_navNode_7_5_2.addNode('6705','Embedded Power System',ssUrlPrefix + 'products/energy-infrastructure/site-power/embedded/index.htm');
g_navNode_7_5_2_1=g_navNode_7_5_2.addNode('6706','Indoor power system',ssUrlPrefix + 'products/energy-infrastructure/site-power/indoor/index.htm');
g_navNode_7_5_2_2=g_navNode_7_5_2.addNode('6707','Outdoor power system',ssUrlPrefix + 'products/energy-infrastructure/site-power/outdoor/index.htm');
g_navNode_7_5_2_3=g_navNode_7_5_2.addNode('6708','Mini-shelter',ssUrlPrefix + 'products/energy-infrastructure/site-power/mini-shelter/index.htm');
g_navNode_7_5_2_4=g_navNode_7_5_2.addNode('10482','Large Capacity Power System for Central Office',ssUrlPrefix + 'products/energy-infrastructure/site-power/central-office/index.htm');
g_navNode_7_5_2_5=g_navNode_7_5_2.addNode('10488','Wall-mounted power system',ssUrlPrefix + 'products/energy-infrastructure/site-power/wall-mounted-power/index.htm');
g_navNode_7_5_4=g_navNode_7_5.addNode('144','Hybrid Power',ssUrlPrefix + 'products/energy-infrastructure/hybrid-power/index.htm');
g_navNode_7_5_4_0=g_navNode_7_5_4.addNode('10466','Diesel Hybrid Power Solution',ssUrlPrefix + 'products/energy-infrastructure/hybrid-power/diesel-hybrid-power/index.htm');
g_navNode_7_5_4_1=g_navNode_7_5_4.addNode('10467','Solar Hybrid Power Solution',ssUrlPrefix + 'products/energy-infrastructure/hybrid-power/solar-hybrid-power/index.htm');
g_navNode_7_5_4_2=g_navNode_7_5_4.addNode('10468','Grid Hybrid Power Solution',ssUrlPrefix + 'products/energy-infrastructure/hybrid-power/grid-hybrid-power/index.htm');
g_navNode_7_6=g_navNode_7.addNode('14','Application \x26 Software',ssUrlPrefix + 'products/software/index.htm');
g_navNode_7_6_0=g_navNode_7_6.addNode('128','BSS',ssUrlPrefix + 'products/software/bss/index.htm');
g_navNode_7_6_0_0=g_navNode_7_6_0.addNode('131','NGBSS',ssUrlPrefix + 'products/software/bss/ngbss/index.htm');
g_navNode_7_6_0_1=g_navNode_7_6_0.addNode('132','NGCRM',ssUrlPrefix + 'products/software/bss/ngcrm/index.htm');
g_navNode_7_6_0_2=g_navNode_7_6_0.addNode('133','NGRM',ssUrlPrefix + 'products/software/bss/ngrm/index.htm');
g_navNode_7_6_0_2_0=g_navNode_7_6_0_2.addNode('481','Convergent Billing Solution',ssUrlPrefix + 'products/software/bss/ngrm/Convergent_Billing_Solution/index.htm');
g_navNode_7_6_0_2_1=g_navNode_7_6_0_2.addNode('482','Fraud Managament',ssUrlPrefix + 'products/software/bss/ngrm/Fraud_Managament/index.htm');
g_navNode_7_6_0_2_2=g_navNode_7_6_0_2.addNode('483','Mediation',ssUrlPrefix + 'products/software/bss/ngrm/Mediation/index.htm');
g_navNode_7_6_0_2_3=g_navNode_7_6_0_2.addNode('484','Mobile Money',ssUrlPrefix + 'products/software/bss/ngrm/Mobile_Money/index.htm');
g_navNode_7_6_0_3=g_navNode_7_6_0.addNode('134','Managed Service ',ssUrlPrefix + 'products/software/bss/bss-oss/index.htm');
g_navNode_7_6_1=g_navNode_7_6.addNode('129','Consumer',ssUrlPrefix + 'products/software/consumer/index.htm');
g_navNode_7_6_1_0=g_navNode_7_6_1.addNode('135','SDP',ssUrlPrefix + 'products/software/consumer/sdp/index.htm');
g_navNode_7_6_1_1=g_navNode_7_6_1.addNode('137','RCS',ssUrlPrefix + 'products/software/consumer/rcs/index.htm');
g_navNode_7_6_1_1_0=g_navNode_7_6_1_1.addNode('491','MMS',ssUrlPrefix + 'products/software/consumer/rcs/MMS/index.htm');
g_navNode_7_6_1_1_1=g_navNode_7_6_1_1.addNode('492','NGIN',ssUrlPrefix + 'products/software/consumer/rcs/NGIN/index.htm');
g_navNode_7_6_1_1_2=g_navNode_7_6_1_1.addNode('493','SMS',ssUrlPrefix + 'products/software/consumer/rcs/SMS/index.htm');
g_navNode_7_6_1_1_3=g_navNode_7_6_1_1.addNode('494','Voice Mail Solution',ssUrlPrefix + 'products/software/consumer/rcs/VoiceMailSolution/index.htm');
g_navNode_7_6_1_2=g_navNode_7_6_1.addNode('136','Digital Home',ssUrlPrefix + 'products/software/consumer/digital-home/index.htm');
g_navNode_7_6_1_3=g_navNode_7_6_1.addNode('138','New Business',ssUrlPrefix + 'products/software/consumer/new-business/index.htm');
g_navNode_7_6_2=g_navNode_7_6.addNode('130','Enterprise',ssUrlPrefix + 'products/software/enterprise/index.htm');
g_navNode_7_6_2_0=g_navNode_7_6_2.addNode('358','eCity',ssUrlPrefix + 'products/software/enterprise/ecity/index.htm');
g_navNode_7_6_2_0_0=g_navNode_7_6_2_0.addNode('935','eHealth',ssUrlPrefix + 'products/software/enterprise/ecity/eHealth/index.htm');
g_navNode_7_6_2_1=g_navNode_7_6_2.addNode('357','IPCC',ssUrlPrefix + 'products/software/enterprise/ipcc/index.htm');
g_navNode_7_6_2_2=g_navNode_7_6_2.addNode('359','UCC',ssUrlPrefix + 'products/software/enterprise/ucc/index.htm');
g_navNode_7_6_2_2_0=g_navNode_7_6_2_2.addNode('499','IP PBX',ssUrlPrefix + 'products/software/enterprise/ucc/IPPBX/index.htm');
g_navNode_7_6_2_2_1=g_navNode_7_6_2_2.addNode('500','IAD',ssUrlPrefix + 'products/software/enterprise/ucc/IAD/index.htm');
g_navNode_7_6_2_2_2=g_navNode_7_6_2_2.addNode('501','IP Phone',ssUrlPrefix + 'products/software/enterprise/ucc/IPPhone/index.htm');
g_navNode_7_6_2_2_3=g_navNode_7_6_2_2.addNode('502','Web Conferencing',ssUrlPrefix + 'products/software/enterprise/ucc/WebConferencing/index.htm');
g_navNode_7_6_2_2_4=g_navNode_7_6_2_2.addNode('503','Unified Message',ssUrlPrefix + 'products/software/enterprise/ucc/UnifiedMessage/index.htm');
g_navNode_7_6_2_2_5=g_navNode_7_6_2_2.addNode('504','eSpace',ssUrlPrefix + 'products/software/enterprise/ucc/eSpace/index.htm');
g_navNode_7_6_2_3=g_navNode_7_6_2.addNode('409','Green Data Center',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/index.htm');
g_navNode_7_6_2_3_0=g_navNode_7_6_2_3.addNode('410','Data Center Servers',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/index.htm');
g_navNode_7_6_2_3_0_0=g_navNode_7_6_2_3_0.addNode('411','E6000',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/E6000/index.htm');
g_navNode_7_6_2_3_0_1=g_navNode_7_6_2_3_0.addNode('512','RH1285',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/RH1285/index.htm');
g_navNode_7_6_2_3_0_2=g_navNode_7_6_2_3_0.addNode('513','RH2285',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/RH2285/index.htm');
g_navNode_7_6_2_3_0_3=g_navNode_7_6_2_3_0.addNode('514','RH5485',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/RH5485/index.htm');
g_navNode_7_6_2_3_0_4=g_navNode_7_6_2_3_0.addNode('620','X6000',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/X6000/index.htm');
g_navNode_7_6_2_3_0_5=g_navNode_7_6_2_3_0.addNode('634','ES2000',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/ES2000/index.htm');
g_navNode_7_6_2_3_0_6=g_navNode_7_6_2_3_0.addNode('635','iNIC1000',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/DataCenterServers/iNIC1000/index.htm');
g_navNode_7_6_2_3_1=g_navNode_7_6_2_3.addNode('937','IDC Construction Solution',ssUrlPrefix + 'products/software/enterprise/GreenDataCenter/idc-construction-solution/index.htm');
g_navNode_7_7=g_navNode_7.addNode('6499','Server',ssUrlPrefix + 'products/servers/index.htm');
g_navNode_7_7_0=g_navNode_7_7.addNode('6505','RH Series Rack Servers',ssUrlPrefix + 'products/servers/rh-servers/index.htm');
g_navNode_7_7_0_0=g_navNode_7_7_0.addNode('6515','Tecal RH2285 V2 Rack Server',ssUrlPrefix + 'products/servers/rh-servers/tecal-rh2285-v2/index.htm');
g_navNode_7_7_0_1=g_navNode_7_7_0.addNode('6527','Tecal RH2485 V2 Rack Server',ssUrlPrefix + 'products/servers/rh-servers/tecal-rh2485-v2/index.htm');
g_navNode_7_7_0_2=g_navNode_7_7_0.addNode('6532','Tecal RH5885 V2 Rack Server',ssUrlPrefix + 'products/servers/rh-servers/tecal-rh5885-v2/index.htm');
g_navNode_7_7_1=g_navNode_7_7.addNode('6537','E Series Blade Servers',ssUrlPrefix + 'products/servers/e-servers/index.htm');
g_navNode_7_7_1_0=g_navNode_7_7_1.addNode('6539','E9000',ssUrlPrefix + 'products/servers/e-servers/e9000/index.htm');
g_navNode_7_8=g_navNode_7.addNode('6544','Storage',ssUrlPrefix + 'products/storage/index.htm');
g_navNode_7_8_1=g_navNode_7_8.addNode('10476','Disk Storage',ssUrlPrefix + 'products/storage/disk-storage/index.htm');
g_navNode_7_8_1_0=g_navNode_7_8_1.addNode('10473','OceanStor HVS85T/HVS88T',ssUrlPrefix + 'products/storage/disk-storage/oceanstor-hvS85T/index.htm');
g_navNode_7_8_1_1=g_navNode_7_8_1.addNode('10474','OceanStor S6800T',ssUrlPrefix + 'products/storage/disk-storage/oceanstors6800t/index.htm');
g_navNode_7_8_1_2=g_navNode_7_8_1.addNode('10475','OceanStor S2600T/S5500T/S5600T/S5800T',ssUrlPrefix + 'products/storage/disk-storage/oceanstors2600t/index.htm');
g_navNode_7_8_1_3=g_navNode_7_8_1.addNode('404','VIS6000',ssUrlPrefix + 'products/storage/disk-storage/vis6000/index.htm');
g_navNode_7_8_1_4=g_navNode_7_8_1.addNode('156','SNS Switch',ssUrlPrefix + 'products/storage/disk-storage/sns-series/index.htm');
g_navNode_7_8_1_4_0=g_navNode_7_8_1_4.addNode('405','SNS Switch 2120',ssUrlPrefix + 'products/storage/disk-storage/sns-series/sns-switch-2120/index.htm');
g_navNode_7_8_1_4_1=g_navNode_7_8_1_4.addNode('406','SNS Switch 5120',ssUrlPrefix + 'products/storage/disk-storage/sns-series/sns-switch-5120/index.htm');
g_navNode_7_8_2=g_navNode_7_8.addNode('10477','Big Data and Cloud Storage',ssUrlPrefix + 'products/storage/big-data/index.htm');
g_navNode_7_8_2_0=g_navNode_7_8_2.addNode('361','CSE Cloud Storage Service Platform',ssUrlPrefix + 'products/storage/big-data/cse-cloud-storage-service-platform/index.htm');
g_navNode_7_8_2_1=g_navNode_7_8_2.addNode('362','CSS Cloud Storage System',ssUrlPrefix + 'products/storage/big-data/css-cloud-storage-system/index.htm');
g_navNode_7_8_2_2=g_navNode_7_8_2.addNode('401','Network Attached Storage',ssUrlPrefix + 'products/storage/big-data/nas/index.htm');
g_navNode_7_8_3=g_navNode_7_8.addNode('10479','Data Protection',ssUrlPrefix + 'products/storage/data-protection/index.htm');
g_navNode_7_8_3_0=g_navNode_7_8_3.addNode('403','VTL6000',ssUrlPrefix + 'products/storage/data-protection/vtl6000/index.htm');
g_navNode_7_11=g_navNode_7.addNode('290','OSS',ssUrlPrefix + 'products/oss/index.htm');
g_navNode_7_11_0=g_navNode_7_11.addNode('291','FBB O\x26M',ssUrlPrefix + 'products/oss/fbb-om/index.htm');
g_navNode_7_11_2=g_navNode_7_11.addNode('73','FBB O\x26M Product Series',ssUrlPrefix + 'products/oss/fbb-om-product-series/index.htm');
g_navNode_7_11_2_0=g_navNode_7_11_2.addNode('10578','iManager U2520',ssUrlPrefix + 'products/oss/fbb-om-product-series/imanageru2520/index.htm');
g_navNode_7_11_2_1=g_navNode_7_11_2.addNode('6603','iManager uTraffic',ssUrlPrefix + 'products/oss/fbb-om-product-series/iManageruTraffic/index.htm');
g_navNode_7_11_2_2=g_navNode_7_11_2.addNode('139','iManager U2000',ssUrlPrefix + 'products/oss/fbb-om-product-series/imanager-u2000/index.htm');
g_navNode_7_11_2_3=g_navNode_7_11_2.addNode('413','iManager N2510',ssUrlPrefix + 'products/oss/fbb-om-product-series/imanager-n2510/index.htm');
g_navNode_7_11_3=g_navNode_7_11.addNode('55','MBB O\x26M Product Series',ssUrlPrefix + 'products/oss/mbb-om-product/index.htm');
g_navNode_7_11_3_0=g_navNode_7_11_3.addNode('112','iManager M2000',ssUrlPrefix + 'products/oss/mbb-om-product/imanager-m2000/index.htm');
g_navNode_7_11_3_2=g_navNode_7_11_3.addNode('115','iManager PRS',ssUrlPrefix + 'products/oss/mbb-om-product/imanager-prs/index.htm');
g_navNode_7_11_3_4=g_navNode_7_11_3.addNode('6686','iManager TranSight',ssUrlPrefix + 'products/oss/mbb-om-product/imanager-transight/index.htm');
g_navNode_7_12=g_navNode_7.addNode('18','Devices',ssUrlPrefix + 'products/eLink/index.htm','externalUrl==http\x3a//www.huaweidevice.com');
g_navNode_8=g_navNode_Root.addNode('9','Services',ssUrlPrefix + 'services/index.htm','secondaryUrlVariableField==article');
g_navNode_9=g_navNode_Root.addNode('25','About Huawei',ssUrlPrefix + 'about-huawei/index.htm');
g_navNode_9_0=g_navNode_9.addNode('166','Corporate Information',ssUrlPrefix + 'about-huawei/corporate-info/index.htm');
g_navNode_9_0_0=g_navNode_9_0.addNode('171','Brand Promise and Brand Attributes',ssUrlPrefix + 'about-huawei/corporate-info/brand-promise/index.htm');
g_navNode_9_0_1=g_navNode_9_0.addNode('172','Our Value Propositions',ssUrlPrefix + 'about-huawei/corporate-info/value-propositions/index.htm');
g_navNode_9_0_2=g_navNode_9_0.addNode('173','Financial Highlights',ssUrlPrefix + 'about-huawei/corporate-info/financial/index.htm');
g_navNode_9_0_3=g_navNode_9_0.addNode('174','Corporate Governance',ssUrlPrefix + 'about-huawei/corporate-info/corporate-governance/index.htm');
g_navNode_9_0_4=g_navNode_9_0.addNode('175','Research \x26 Development',ssUrlPrefix + 'about-huawei/corporate-info/research-development/index.htm');
g_navNode_9_0_5=g_navNode_9_0.addNode('2173','Cyber Security',ssUrlPrefix + 'about-huawei/corporate-info/CyberSecurity/index.htm');
g_navNode_9_0_6=g_navNode_9_0.addNode('176','Milestones',ssUrlPrefix + 'about-huawei/corporate-info/milestone/index.htm');
g_navNode_9_0_7=g_navNode_9_0.addNode('221','Quality Policy',ssUrlPrefix + 'about-huawei/corporate-info/quality-policy/index.htm');
g_navNode_9_0_8=g_navNode_9_0.addNode('177','Annual Report',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/index.htm','externalUrl==/en/about-huawei/corporate-info/annual-report/annual-report-2012/index.htm');
g_navNode_9_0_8_1=g_navNode_9_0_8.addNode('8998','Annual Report 2012',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/index.htm');
g_navNode_9_0_8_1_0=g_navNode_9_0_8_1.addNode('10118','A Message from the CEO',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/a-message-from-the-ceo/index.htm');
g_navNode_9_0_8_1_1=g_navNode_9_0_8_1.addNode('8999','Letter from the Rotating and Acting CEO',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/rotating-and-acting-ceo/index.htm');
g_navNode_9_0_8_1_2=g_navNode_9_0_8_1.addNode('9048','Business Highlights in 2012',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/business-highlights-in-2012/index.htm');
g_navNode_9_0_8_1_3=g_navNode_9_0_8_1.addNode('9081','Five-Year Financial Highlights',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/five-year-financial-highlights/index.htm');
g_navNode_9_0_8_1_4=g_navNode_9_0_8_1.addNode('9082','Letter from the Chairwoman',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/chairwoman/index.htm');
g_navNode_9_0_8_1_5=g_navNode_9_0_8_1.addNode('9087','Brand Promise and Brand Attributes',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/brand-promiseand/index.htm');
g_navNode_9_0_8_1_6=g_navNode_9_0_8_1.addNode('9091','Management Discussion and Analysis',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/index.htm');
g_navNode_9_0_8_1_6_0=g_navNode_9_0_8_1_6.addNode('10520','Our Value Propositions',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/value-propositions/index.htm');
g_navNode_9_0_8_1_6_1=g_navNode_9_0_8_1_6.addNode('9811','Business Review 2012',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/business-review-2012/index.htm');
g_navNode_9_0_8_1_6_1_0=g_navNode_9_0_8_1_6_1.addNode('9837','Carrier Network',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/business-review-2012/carrier-network/index.htm');
g_navNode_9_0_8_1_6_1_1=g_navNode_9_0_8_1_6_1.addNode('9842','Enterprise Business',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/business-review-2012/enterprise-business/index.htm');
g_navNode_9_0_8_1_6_1_2=g_navNode_9_0_8_1_6_1.addNode('10037','Consumer Business',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/business-review-2012/ConsumerBusiness/index.htm');
g_navNode_9_0_8_1_6_2=g_navNode_9_0_8_1_6.addNode('9812','Results of Operations',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/results-of-operations/index.htm');
g_navNode_9_0_8_1_6_3=g_navNode_9_0_8_1_6.addNode('9813','Financial Position',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/financial-position/index.htm');
g_navNode_9_0_8_1_6_4=g_navNode_9_0_8_1_6.addNode('9814','Cash Flow from Operating Activities',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/cash-flow/index.htm');
g_navNode_9_0_8_1_6_5=g_navNode_9_0_8_1_6.addNode('9815','Financial Risk Management',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/financial-risk-management/index.htm');
g_navNode_9_0_8_1_6_6=g_navNode_9_0_8_1_6.addNode('9816','Research and Development',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/research/index.htm');
g_navNode_9_0_8_1_6_7=g_navNode_9_0_8_1_6.addNode('9824','Cyber Security',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/cyber-security/index.htm');
g_navNode_9_0_8_1_6_8=g_navNode_9_0_8_1_6.addNode('9826','Critical Accounting Estimates',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/management-discussion/estimates/index.htm');
g_navNode_9_0_8_1_7=g_navNode_9_0_8_1.addNode('9110','Market Trends',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/market-trends/index.htm');
g_navNode_9_0_8_1_8=g_navNode_9_0_8_1.addNode('9288','Independent Auditor\'s Report',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/auditor-report/index.htm');
g_navNode_9_0_8_1_9=g_navNode_9_0_8_1.addNode('9323','Consolidated Financial Statements Summary and Notes',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/summary-notes/index.htm');
g_navNode_9_0_8_1_10=g_navNode_9_0_8_1.addNode('9336','Company Information',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/company-information/index.htm');
g_navNode_9_0_8_1_11=g_navNode_9_0_8_1.addNode('9377','Risk Factors',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/risk-factors/index.htm');
g_navNode_9_0_8_1_12=g_navNode_9_0_8_1.addNode('9378','Corporate Governance Report',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/corporate-governance-report/index.htm');
g_navNode_9_0_8_1_13=g_navNode_9_0_8_1.addNode('9379','Sustainable Development',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/sustainable-development/index.htm');
g_navNode_9_0_8_1_14=g_navNode_9_0_8_1.addNode('9380','Abbreviations, Financial Terminology, and Exchange Rates',ssUrlPrefix + 'about-huawei/corporate-info/annual-report/annual-report-2012/abbreviations/index.htm');
g_navNode_9_1=g_navNode_9.addNode('10533','Sustainability',ssUrlPrefix + 'about-huawei/sustainability/index.htm');
g_navNode_9_1_0=g_navNode_9_1.addNode('10534','Sustainability Management',ssUrlPrefix + 'about-huawei/sustainability/management/index.htm');
g_navNode_9_1_0_0=g_navNode_9_1_0.addNode('10589','Message from the Chairwoman',ssUrlPrefix + 'about-huawei/sustainability/management/message-from-chairwoman/index.htm');
g_navNode_9_1_0_1=g_navNode_9_1_0.addNode('10590','Message from the Chairman of Corporate Sustainable Development Committee',ssUrlPrefix + 'about-huawei/sustainability/management/message-csd-chairman/index.htm');
g_navNode_9_1_0_2=g_navNode_9_1_0.addNode('10591','Sustainability Strategy \x26 Organization',ssUrlPrefix + 'about-huawei/sustainability/management/strategy-organization/index.htm');
g_navNode_9_1_0_3=g_navNode_9_1_0.addNode('10592','Sustainability Management System',ssUrlPrefix + 'about-huawei/sustainability/management/management-system/index.htm');
g_navNode_9_1_1=g_navNode_9_1.addNode('10535','Bridging the Digital Divide',ssUrlPrefix + 'about-huawei/sustainability/digital-divide/index.htm');
g_navNode_9_1_1_0=g_navNode_9_1_1.addNode('10541','Communications for All',ssUrlPrefix + 'about-huawei/sustainability/digital-divide/communications-for-all/index.htm');
g_navNode_9_1_1_1=g_navNode_9_1_1.addNode('10542','Broadband for All',ssUrlPrefix + 'about-huawei/sustainability/digital-divide/broadband-for-all/index.htm');
g_navNode_9_1_1_2=g_navNode_9_1_1.addNode('10543','Nurturing ICT Talent',ssUrlPrefix + 'about-huawei/sustainability/digital-divide/nurturing-ict-talent/index.htm');
g_navNode_9_1_1_3=g_navNode_9_1_1.addNode('10544','Application of ICT Technologies',ssUrlPrefix + 'about-huawei/sustainability/digital-divide/application-ict/index.htm');
g_navNode_9_1_2=g_navNode_9_1.addNode('10536','Supporting Stable and Secure Network Operations',ssUrlPrefix + 'about-huawei/sustainability/stable-secure-network/index.htm');
g_navNode_9_1_2_0=g_navNode_9_1_2.addNode('10545','Network Stability',ssUrlPrefix + 'about-huawei/sustainability/stable-secure-network/network-stability/index.htm');
g_navNode_9_1_2_1=g_navNode_9_1_2.addNode('10546','Cyber Security',ssUrlPrefix + 'about-huawei/sustainability/stable-secure-network/cyber-security/index.htm');
g_navNode_9_1_3=g_navNode_9_1.addNode('10537','Promoting Environmental Protection',ssUrlPrefix + 'about-huawei/sustainability/environment-protect/index.htm');
g_navNode_9_1_3_0=g_navNode_9_1_3.addNode('10547','Green Products and Services',ssUrlPrefix + 'about-huawei/sustainability/environment-protect/green-products-services/index.htm');
g_navNode_9_1_3_1=g_navNode_9_1_3.addNode('10548','Deceleration of and Adaptation to Climate Change',ssUrlPrefix + 'about-huawei/sustainability/environment-protect/climate-change/index.htm');
g_navNode_9_1_3_2=g_navNode_9_1_3.addNode('10549','Sustainable Utilization of Resources',ssUrlPrefix + 'about-huawei/sustainability/environment-protect/sustainable-resources/index.htm');
g_navNode_9_1_3_3=g_navNode_9_1_3.addNode('10550','Pollution Prevention and Treatment',ssUrlPrefix + 'about-huawei/sustainability/environment-protect/pollution-prevent/index.htm');
g_navNode_9_1_4=g_navNode_9_1.addNode('10539','Seeking Win-Win Development',ssUrlPrefix + 'about-huawei/sustainability/win-win-development/index.htm');
g_navNode_9_1_4_0=g_navNode_9_1_4.addNode('10551','Caring for Employees',ssUrlPrefix + 'about-huawei/sustainability/win-win-development/caring-employees/index.htm');
g_navNode_9_1_4_1=g_navNode_9_1_4.addNode('10554','Social Contribution',ssUrlPrefix + 'about-huawei/sustainability/win-win-development/social-contribution/index.htm');
g_navNode_9_1_4_2=g_navNode_9_1_4.addNode('10552','Operations in Compliance with Applicable Laws and Regulations',ssUrlPrefix + 'about-huawei/sustainability/win-win-development/applicable-Laws-and-regulations/index.htm');
g_navNode_9_1_4_3=g_navNode_9_1_4.addNode('10605','Focus on Managing Huawei\'s Own Risks',ssUrlPrefix + 'about-huawei/sustainability/win-win-development/own-risks/index.htm');
g_navNode_9_1_4_4=g_navNode_9_1_4.addNode('10553','Supply Chain Management',ssUrlPrefix + 'about-huawei/sustainability/win-win-development/sustainable-supply-chain/index.htm');
g_navNode_9_1_5=g_navNode_9_1.addNode('45','Sustainability Report',ssUrlPrefix + 'about-huawei/sustainability/sustainability-report/index.htm');
g_navNode_9_4=g_navNode_9.addNode('168','Newsroom',ssUrlPrefix + 'about-huawei/newsroom/index.htm');
g_navNode_9_4_0=g_navNode_9_4.addNode('184','Press Releases',ssUrlPrefix + 'about-huawei/newsroom/press-release/index.htm','secondaryUrlVariableField==article');
g_navNode_9_4_1=g_navNode_9_4.addNode('227','Product Launch',ssUrlPrefix + 'about-huawei/newsroom/product_launch/index.htm','secondaryUrlVariableField==article');
g_navNode_9_4_2=g_navNode_9_4.addNode('185','Media Coverage',ssUrlPrefix + 'about-huawei/newsroom/media-coverage/index.htm','secondaryUrlVariableField==article');
g_navNode_9_4_4=g_navNode_9_4.addNode('187','Resources',ssUrlPrefix + 'about-huawei/newsroom/resources/index.htm');
g_navNode_9_4_5=g_navNode_9_4.addNode('188','Media Contacts',ssUrlPrefix + 'about-huawei/newsroom/media-contacts/index.htm');
g_navNode_9_4_6=g_navNode_9_4.addNode('189','Photos',ssUrlPrefix + 'about-huawei/newsroom/photos/index.htm');
g_navNode_9_5=g_navNode_9.addNode('27','Publications',ssUrlPrefix + 'about-huawei/publications/index.htm');
g_navNode_9_5_0=g_navNode_9_5.addNode('28','WinWin',ssUrlPrefix + 'about-huawei/publications/winwin-magazine/index.htm','secondaryUrlVariableField==article');
g_navNode_9_5_1=g_navNode_9_5.addNode('198','Communicate',ssUrlPrefix + 'about-huawei/publications/communicate/index.htm','secondaryUrlVariableField==article');
g_navNode_9_5_2=g_navNode_9_5.addNode('199','Huawei Service',ssUrlPrefix + 'about-huawei/publications/huawei-service/index.htm','secondaryUrlVariableField==article');
g_navNode_9_5_3=g_navNode_9_5.addNode('200','Huawei People',ssUrlPrefix + 'about-huawei/publications/huawei-people/index.htm','externalUrl==http\x3a//app.huawei.com/paper/newspaper/newsPaperPage.do?method\x3dshowLatestMagazineList\x26sortId\x3d4');
g_navNode_9_6=g_navNode_9.addNode('26','Events',ssUrlPrefix + 'about-huawei/events/index.htm','secondaryUrlVariableField==eventarticle');
g_navNode_9_6_0=g_navNode_9_6.addNode('190','Previous Events',ssUrlPrefix + 'about-huawei/events/previous-events/index.htm','secondaryUrlVariableField==Eventscontent');
g_navNode_9_7=g_navNode_9.addNode('800','Industry Analysts',ssUrlPrefix + 'about-huawei/industry-analysts/index.htm','isDynamic==TRUE');
g_navNode_9_7_0=g_navNode_9_7.addNode('191','Event Calendar',ssUrlPrefix + 'about-huawei/industry-analysts/events/index.htm','isDynamic==TRUE');
g_navNode_9_7_1=g_navNode_9_7.addNode('193','Registration',ssUrlPrefix + 'about-huawei/industry-analysts/registration/index.htm','isDynamic==FALSE');
g_navNode_9_7_2=g_navNode_9_7.addNode('194','Contact',ssUrlPrefix + 'about-huawei/industry-analysts/contact/index.htm','isDynamic==FALSE');
g_navNode_9_7_3=g_navNode_9_7.addNode('1101','Download',ssUrlPrefix + 'about-huawei/industry-analysts/download/index.htm','isDynamic==TRUE');
g_navNode_9_7_4=g_navNode_9_7.addNode('192','Newsletter',ssUrlPrefix + 'about-huawei/industry-analysts/newsletter/index.htm','isDynamic==FALSE');
g_navNode_9_8=g_navNode_9.addNode('170','Partners',ssUrlPrefix + 'about-huawei/Partner/index.htm');
g_navNode_9_8_0=g_navNode_9_8.addNode('195','Seeking Partners',ssUrlPrefix + 'about-huawei/Partner/seeking-partners/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_1=g_navNode_9_8.addNode('196','Huawei Payment Presentation',ssUrlPrefix + 'about-huawei/Partner/payment-presentation/index.htm');
g_navNode_9_8_1_0=g_navNode_9_8_1.addNode('599','Introduction of finance payment process \x26 notice',ssUrlPrefix + 'about-huawei/Partner/payment-presentation/Introductionoffinancepaymentprocessnotice/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_1_1=g_navNode_9_8_1.addNode('608','Introduction of supplier finance collaboration system ',ssUrlPrefix + 'about-huawei/Partner/payment-presentation/Introductionofsupplierfinancecollaborationsystem/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_2=g_navNode_9_8.addNode('611','Integrated with OSS ',ssUrlPrefix + 'about-huawei/Partner/IntegratedwithOSS/index.htm');
g_navNode_9_8_2_0=g_navNode_9_8_2.addNode('613','Interoperability Activities ',ssUrlPrefix + 'about-huawei/Partner/IntegratedwithOSS/InteroperabilityActivities/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_2_1=g_navNode_9_8_2.addNode('614','OSS Partners ',ssUrlPrefix + 'about-huawei/Partner/IntegratedwithOSS/OSSPartners/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_3=g_navNode_9_8.addNode('617','Procurement Platform ',ssUrlPrefix + 'about-huawei/Partner/ProcurementPlatform/index.htm');
g_navNode_9_8_3_0=g_navNode_9_8_3.addNode('623','2013 New Year\'s Greetings',ssUrlPrefix + 'about-huawei/Partner/ProcurementPlatform/new-year-greetings/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_3_1=g_navNode_9_8_3.addNode('625','Requirements of Procurement Internal Control',ssUrlPrefix + 'about-huawei/Partner/ProcurementPlatform/Communicate/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_3_2=g_navNode_9_8_3.addNode('627','Procurement Trend',ssUrlPrefix + 'about-huawei/Partner/ProcurementPlatform/HuaweiPeople/index.htm');
g_navNode_9_8_3_3=g_navNode_9_8_3.addNode('629','Prospective Supplier',ssUrlPrefix + 'about-huawei/Partner/ProcurementPlatform/HuaweiService/index.htm','secondaryUrlVariableField==article');
g_navNode_9_8_4=g_navNode_9_8.addNode('1906','Open at Huawei',ssUrlPrefix + 'about-huawei/Partner/openathuawei/index.htm');
g_navNode_9_8_4_0=g_navNode_9_8_4.addNode('1907','Open Source',ssUrlPrefix + 'about-huawei/Partner/openathuawei/opensource/index.htm');
g_navNode_9_8_4_1=g_navNode_9_8_4.addNode('1908','Communities and Sponsorships',ssUrlPrefix + 'about-huawei/Partner/openathuawei/communitiesandsponsorships/index.htm');
g_navNode_9_8_4_2=g_navNode_9_8_4.addNode('1909','Open Activities',ssUrlPrefix + 'about-huawei/Partner/openathuawei/openactivities/index.htm');
g_navNode_9_8_4_3=g_navNode_9_8_4.addNode('7006','Contact Us',ssUrlPrefix + 'about-huawei/Partner/openathuawei/contact-us/index.htm');
g_navNode_9_9=g_navNode_9.addNode('263','Newsletter',ssUrlPrefix + 'about-huawei/Newsletter/index.htm','contributorOnly==false','externalUrl==http\x3a//www.huawei.com/newsletter/SubscribeNL_init.html?form.subscribeCategory\x3dEnglish\x26request_locale\x3den_US');
g_navNode_9_9_0=g_navNode_9_9.addNode('264','Subscribe',ssUrlPrefix + 'about-huawei/Newsletter/Subscribe/index.htm','externalUrl==http\x3a//www.huawei.com/newsletter/SubscribeNL_init.html?form.subscribeCategory\x3dEnglish\x26request_locale\x3den_US');
g_navNode_9_9_1=g_navNode_9_9.addNode('266','Unsubscribe',ssUrlPrefix + 'about-huawei/Newsletter/Unsubscribe/index.htm','externalUrl==http\x3a//www.huawei.com/newsletter/UnsubscribeNL_init.html?request_locale\x3den_US');
g_navNode_9_10=g_navNode_9.addNode('163','RSS',ssUrlPrefix + 'about-huawei/rss-feeds/index.htm');
g_navNode_9_11=g_navNode_9.addNode('35','Contact Us',ssUrlPrefix + 'about-huawei/contact-us/index.htm');
g_navNode_9_11_0=g_navNode_9_11.addNode('37','Asia Pacific',ssUrlPrefix + 'about-huawei/contact-us/asia-pacific/index.htm');
g_navNode_9_11_1=g_navNode_9_11.addNode('38','Commonwealth of Independent States',ssUrlPrefix + 'about-huawei/contact-us/cis/index.htm');
g_navNode_9_11_3=g_navNode_9_11.addNode('40','Europe',ssUrlPrefix + 'about-huawei/contact-us/europe/index.htm');
g_navNode_9_11_4=g_navNode_9_11.addNode('41','Latin America',ssUrlPrefix + 'about-huawei/contact-us/latin-america/index.htm');
g_navNode_9_11_5=g_navNode_9_11.addNode('42','Middle East North Africa',ssUrlPrefix + 'about-huawei/contact-us/mena/index.htm');
g_navNode_9_11_6=g_navNode_9_11.addNode('43','North America',ssUrlPrefix + 'about-huawei/contact-us/north-america/index.htm');
g_navNode_9_11_7=g_navNode_9_11.addNode('44','Sub-Saharan Africa',ssUrlPrefix + 'about-huawei/contact-us/south-africa/index.htm');
g_navNode_9_11_8=g_navNode_9_11.addNode('36','All Region',ssUrlPrefix + 'about-huawei/contact-us/a-z/index.htm');
g_navNode_10=g_navNode_Root.addNode('219','Success Story',ssUrlPrefix + 'success-story/index.htm','secondaryUrlVariableField==article');
g_navNode_14=g_navNode_Root.addNode('299','Products Lifecycle',ssUrlPrefix + 'ProductsLifecycle/index.htm');
g_navNode_14_0=g_navNode_14.addNode('300','Radio Access Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/index.htm');
g_navNode_14_0_0=g_navNode_14_0.addNode('321','PS Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/PSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_1=g_navNode_14_0.addNode('308','GSM BSS Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/GSMBSSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_2=g_navNode_14_0.addNode('309','UMTS RAN Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/UMTSRANProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_3=g_navNode_14_0.addNode('223','Single RAN Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/SingleRANProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_4=g_navNode_14_0.addNode('310','CDMA BSS Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/CDMABSSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_5=g_navNode_14_0.addNode('311','OSS Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/OSSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_6=g_navNode_14_0.addNode('255','TDD BSS Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/TDDBSSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_0_7=g_navNode_14_0.addNode('1007','LTE Products',ssUrlPrefix + 'ProductsLifecycle/RadioAccessProducts/LTE-Products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1=g_navNode_14.addNode('301','Core Network Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/index.htm');
g_navNode_14_1_0=g_navNode_14_1.addNode('312','GSM/UMTS CS Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/GSMUMTSCSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_1=g_navNode_14_1.addNode('313','CDMA CS Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/CDMACSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_2=g_navNode_14_1.addNode('314','NGN Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/NGNProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_3=g_navNode_14_1.addNode('315','IMS Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/IMSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_4=g_navNode_14_1.addNode('316','SG/STP Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/SGSTPProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_5=g_navNode_14_1.addNode('317','Switch Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/SwitchProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_6=g_navNode_14_1.addNode('318','HLR Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/HLRProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_7=g_navNode_14_1.addNode('319','MGW Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/MGWProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_8=g_navNode_14_1.addNode('10819','UPCC Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/upcc/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_1_9=g_navNode_14_1.addNode('256','Others Products',ssUrlPrefix + 'ProductsLifecycle/CoreNetworkProducts/OthersProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_2=g_navNode_14.addNode('302','Transport Network Products',ssUrlPrefix + 'ProductsLifecycle/TransportNetworkProducts/index.htm');
g_navNode_14_2_0=g_navNode_14_2.addNode('323','WDM/OTN Products',ssUrlPrefix + 'ProductsLifecycle/TransportNetworkProducts/WDMOTNProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_2_1=g_navNode_14_2.addNode('324','MSTP Products',ssUrlPrefix + 'ProductsLifecycle/TransportNetworkProducts/MSTPProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_2_2=g_navNode_14_2.addNode('325','Microwave Products',ssUrlPrefix + 'ProductsLifecycle/TransportNetworkProducts/MicrowaveProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_3=g_navNode_14.addNode('303','Broadband Access Products',ssUrlPrefix + 'ProductsLifecycle/BroadbandAccessProducts/index.htm');
g_navNode_14_3_0=g_navNode_14_3.addNode('326','DSLAM Products',ssUrlPrefix + 'ProductsLifecycle/BroadbandAccessProducts/DSLAMProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_3_1=g_navNode_14_3.addNode('327','MSAN Products',ssUrlPrefix + 'ProductsLifecycle/BroadbandAccessProducts/MSANProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_3_2=g_navNode_14_3.addNode('328','FTTx Products',ssUrlPrefix + 'ProductsLifecycle/BroadbandAccessProducts/FTTXProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_3_3=g_navNode_14_3.addNode('329','ODN Products',ssUrlPrefix + 'ProductsLifecycle/BroadbandAccessProducts/ODNProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_3_4=g_navNode_14_3.addNode('268','BITS Products',ssUrlPrefix + 'ProductsLifecycle/BroadbandAccessProducts/BITSProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_4=g_navNode_14.addNode('304','Application \x26 Software',ssUrlPrefix + 'ProductsLifecycle/ApplicationSoftware/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5=g_navNode_14.addNode('305','Data Communications Products',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/index.htm');
g_navNode_14_5_0=g_navNode_14_5.addNode('330','NE Series Routers Products',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/NESeriesRoutersProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5_1=g_navNode_14_5.addNode('331','AR Series Routers Products',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/ARSeriesRoutersProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5_2=g_navNode_14_5.addNode('332','Multi-service Control Gateway Products',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/Multi-serviceControlGatewayProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5_3=g_navNode_14_5.addNode('333','Metro Services Platform',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/MetroServicesPlatform/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5_4=g_navNode_14_5.addNode('334','Ethernet Switches Products',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/EthernetSwitchesProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5_5=g_navNode_14_5.addNode('335','Network Security Products',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/NetworkSecurityProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_5_6=g_navNode_14_5.addNode('336','PTN',ssUrlPrefix + 'ProductsLifecycle/DataCommunicationsProducts/PTN/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6=g_navNode_14.addNode('306','OSS Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/index.htm');
g_navNode_14_6_0=g_navNode_14_6.addNode('337','iManager\xae U2000 Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/imanager-U2000-products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6_1=g_navNode_14_6.addNode('338','iManager\xae T2000/2100 Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/imanager-T2000-2100-products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6_2=g_navNode_14_6.addNode('339','iManager\xae N2000 DMS Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/imanager-N2000-DMS-products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6_3=g_navNode_14_6.addNode('340','iManager\xae N2000 BMS Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/imanager-N2000-BMS-products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6_4=g_navNode_14_6.addNode('341','Value-Added Software Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/Value-AddedSoftwareProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6_5=g_navNode_14_6.addNode('342','iManager\xae N2000 Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/imanager-N2000-products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_6_6=g_navNode_14_6.addNode('343','iManager\xae M2000 Products',ssUrlPrefix + 'ProductsLifecycle/OSSProducts/imanager-M2000-products/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_14_7=g_navNode_14.addNode('307','Site Products',ssUrlPrefix + 'ProductsLifecycle/SiteProducts/index.htm');
g_navNode_14_7_0=g_navNode_14_7.addNode('344','MDF Products',ssUrlPrefix + 'ProductsLifecycle/SiteProducts/MDFProducts/index.htm','secondaryUrlVariableField==lifecycleContent');
g_navNode_16=g_navNode_Root.addNode('373','Careers',ssUrlPrefix + 'careers/index.htm');
g_navNode_16_0=g_navNode_16.addNode('346','Jobs',ssUrlPrefix + 'careers/jobs/index.htm');
g_navNode_16_1=g_navNode_16.addNode('347','The Workplace',ssUrlPrefix + 'careers/the-workplace/index.htm');
g_navNode_16_1_0=g_navNode_16_1.addNode('348','Career Path',ssUrlPrefix + 'careers/the-workplace/career-path/index.htm');
g_navNode_16_1_1=g_navNode_16_1.addNode('349','Training',ssUrlPrefix + 'careers/the-workplace/training/index.htm');
g_navNode_16_1_2=g_navNode_16_1.addNode('350','Performance \x26 Reward',ssUrlPrefix + 'careers/the-workplace/performance-reward/index.htm');
g_navNode_16_1_3=g_navNode_16_1.addNode('351','Working Environment',ssUrlPrefix + 'careers/the-workplace/working-environment/index.htm');
g_navNode_16_1_4=g_navNode_16_1.addNode('352','Mentorship Program',ssUrlPrefix + 'careers/the-workplace/mentorship-program/index.htm');
g_navNode_16_1_5=g_navNode_16_1.addNode('353','Code of Conduct',ssUrlPrefix + 'careers/the-workplace/code-of-conduct/index.htm');
g_navNode_16_2=g_navNode_16.addNode('354','Diversity',ssUrlPrefix + 'careers/diversity/index.htm');
g_navNode_16_2_0=g_navNode_16_2.addNode('363','Growing with Huawei',ssUrlPrefix + 'careers/diversity/growing-with-huawei/index.htm');
g_navNode_16_2_1=g_navNode_16_2.addNode('364','To Succeed Globally, We Have to Act Locally',ssUrlPrefix + 'careers/diversity/to-succeed-globally/index.htm');
g_navNode_16_2_2=g_navNode_16_2.addNode('365','Why Did I Choose Huawei',ssUrlPrefix + 'careers/diversity/choose-huawei/index.htm');
g_navNode_16_2_3=g_navNode_16_2.addNode('366','The Thrill of Excitement',ssUrlPrefix + 'careers/diversity/the-thrill-of-excitement/index.htm');
g_navNode_16_2_4=g_navNode_16_2.addNode('367','Riding Across The Eurasian Continent',ssUrlPrefix + 'careers/diversity/riding-across-the-eurasian-continent/index.htm');
g_navNode_16_2_5=g_navNode_16_2.addNode('368','Training in Shenzhen',ssUrlPrefix + 'careers/diversity/training-in-shenzhen/index.htm');
g_navNode_16_3=g_navNode_16.addNode('369','Living at Huawei',ssUrlPrefix + 'careers/living-at-huawei/index.htm');
g_navNode_16_4=g_navNode_16.addNode('370','Regional Recruit',ssUrlPrefix + 'careers/regional-recruit/index.htm');
g_navNode_16_4_0=g_navNode_16_4.addNode('371','Nordic and Baltic',ssUrlPrefix + 'careers/regional-recruit/nordic-and-baltic/index.htm');
g_navNode_16_4_1=g_navNode_16_4.addNode('372','Sweden R\x26D Center',ssUrlPrefix + 'careers/regional-recruit/sweden-r-d-center/index.htm');
g_navNode_34=g_navNode_Root.addNode('7224','Security',ssUrlPrefix + 'security/index.htm');
g_navNode_34_0=g_navNode_34.addNode('7225','PSIRT',ssUrlPrefix + 'security/psirt/index.htm');
g_navNode_34_0_0=g_navNode_34_0.addNode('7228','Security Bulletins',ssUrlPrefix + 'security/psirt/security-bulletins/index.htm','secondaryUrlVariableField==article');
g_navNode_34_0_0_1=g_navNode_34_0_0.addNode('9634','Security Advisories',ssUrlPrefix + 'security/psirt/security-bulletins/security-advisories/index.htm','secondaryUrlVariableField==article');
g_navNode_34_0_0_2=g_navNode_34_0_0.addNode('9635','Security Notices',ssUrlPrefix + 'security/psirt/security-bulletins/security-notices/index.htm','secondaryUrlVariableField==article');
g_navNode_34_0_1=g_navNode_34_0.addNode('7252','Vul. Response Process',ssUrlPrefix + 'security/psirt/vul-response-process/index.htm');
g_navNode_34_0_2=g_navNode_34_0.addNode('7253','Report Vulnerabilities',ssUrlPrefix + 'security/psirt/report-vulnerabilities/index.htm');
g_navNode_34_0_3=g_navNode_34_0.addNode('7251','About Huawei PSIRT',ssUrlPrefix + 'security/psirt/about-huawei-psirt/index.htm');
g_navNode_35=g_navNode_Root.addNode('11380','error',ssUrlPrefix + 'error/index.htm');
g_navNode_37=g_navNode_Root.addNode('12669','Join Huawei',ssUrlPrefix + 'career/index.htm');
g_navNode_37_0=g_navNode_37.addNode('12673','News Headline',ssUrlPrefix + 'career/news/index.htm','secondaryUrlVariableField==article');
g_navNode_37_1=g_navNode_37.addNode('12674','Grow With Huawei',ssUrlPrefix + 'career/grow-with-huawei/index.htm','secondaryUrlVariableField==article');
g_navNode_37_2=g_navNode_37.addNode('12675','Brilliant Huawei',ssUrlPrefix + 'career/brilliant-huawei/index.htm','secondaryUrlVariableField==article');