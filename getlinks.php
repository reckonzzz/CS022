<?php
function getlink($db,$num){
	if($db == "SGD-PATHWAY") return "http://pathway.yeastgenome.org/YEAST/new-image?type=PATHWAY&amp;object=".$num;
	if($db == "ECHOBASE") return "http://www.york.ac.uk/res/thomas/Gene.cfm?recordID=".$num;
	if($db == "PIRE") return "http://pir.georgetown.edu/cgi-bin/nbrfget?xref=uwgp&amp;".$num;
	if($db == "UNIPROT") return "http://www.uniprot.org/uniprot/".$num;
	if($db == "CAS") return "http://www.commonchemistry.org/ChemicalDetail.aspx?ref=".$num;
	if($db == "NCBI-TAXONOMY-$db") return "http://www.ncbi.nlm.nih.gov/Taxonomy/Browser/wwwtax.cgi?mode=Info&amp;id=".$num;
	if($db == "ECOCYC") return "http://biocyc.org/new-image?object=".$num;
	if($db == "ECOGENE") return "http://www.ecogene.org/geneInfo.php?eg_id=".$num;
	if($db == "BIOHEALTHBASE") return "http://www.biohealthbase.org/GSearch/details.do?locus=".$num;
	if($db == "UCSC") return "http://genome.ucsc.edu/cgi-bin/hgTracks?org=human&amp;position=".$num;
	if($db == "DBGET") return "http://www.genome.ad.jp/dbget-bin/www_bget?".$num;
	if($db == "UM-BBD-CPD") return "http://umbbd.msi.umn.edu/servlets/pageservlet?ptype=c&amp;compID=".$num;
	if($db == "PUBCHEM") return "http://pubchem.ncbi.nlm.nih.gov/summary/summary.cgi?cid=".$num;
	if($db == "CGSC") return "http://cgsc.biology.yale.edu/cgi-bin/sybgw/cgsc/Site/".$num;
	if($db == "ECOL199310CYC") return "http://BioCyc.org/ECOL199310/new-image?object=".$num;
	if($db == "WIT-PWY") return "http://wit.mcs.anl.gov/WIT2/CGI/pw.cgi?pw=".$num;
	if($db == "PDB") return "http://www.rcsb.org/pdb/cgi/explore.cgi?pdbId=".$num;
	if($db == "MTBCDCCYC") return "http://BioCyc.org/MTBCDC/new-image?object=".$num;
	if($db == "HOMINISDB2") return "http://cryptodb.org/cryptodb/showRecord.do?name=GeneRecordClasses.GeneRecordClass&amp;id=".$num;
	if($db == "ENTREZ") return "http://www.ncbi.nlm.nih.gov/entrez/viewer.fcgi?$db=nuccore&amp;id=".$num;
	if($db == "GENECARDS") return "http://www.genecards.org/cgi-bin/carddisp.pl?gene=".$num;
	if($db == "WIT") return "http://www.cme.msu.edu/wit-cgi/wit_enzyme.cgi?".$num;
	if($db == "NRSUB") return "http://acnuc.univ-lyon1.fr/cgi-bin/acnuc-search-bg?query=".$num;
	if($db == "LIGAND-CPD") return "http://www.genome.ad.jp/dbget-bin/www_bget?compound.".$num;
	if($db == "OU-MICROARRAY") return "http://chase.ou.edu/oubcf/index.php?bnum=".$num;
	if($db == "NCI") return "http://cactus.nci.nih.gov/ncidb2/?nsc=".$num;
	if($db == "ECOO157CYC") return "http://BioCyc.org/ECOO157/new-image?object=".$num;
	if($db == "REFSEQ") return "http://www.ncbi.nlm.nih.gov/entrez/viewer.fcgi?val=".$num;
	if($db == "TAIR") return "http://www.arabidopsis.org/servlets/TairObject?type=locus&amp;name=".$num;
	if($db == "LIGAND") return "http://www.genome.ad.jp/dbget-bin/www_bget?ligand.".$num;
	if($db == "SHIGELLACYC") return "http://BioCyc.org/SHIGELLA/new-image?object=".$num;
	if($db == "LOCUSLINK") return "http://www.ncbi.nlm.nih.gov/entrez/query.fcgi?$db=gene&amp;cmd=Retrieve&amp;dopt=summary&amp;list_uids=".$num;
	if($db == "PUBMED") return "https://www.ncbi.nlm.nih.gov/pubmed/".$num;
	if($db == "METACYC") return "http://biocyc.org/META/new-image?object=".$num;
	if($db == "UM-BBD-PWY") return "http://umbbd.msi.umn.edu/servlets/pageservlet?ptype=p&amp;pathway_abbr=".$num;
	if($db == "PYLORIGENE") return "http://genolist.pasteur.fr/PyloriGene/genome.cgi?external_query.".$num;
	if($db == "MTBRVCYC") return "http://BioCyc.org/MTBRV/new-image?object=".$num;
	if($db == "SOYBASE") return "http://soybase.ncgr.org/cgi-bin/ace/generic/pic/soybase?class=Reaction_or_Pathway&amp;name=%21".$num;
	if($db == "UNIGENE") return "http://www.ncbi.nlm.nih.gov/UniGene/clust.cgi?ORG=Hs&amp;CID=".$num;
	if($db == "SFLE198214CYC") return "http://BioCyc.org/SFLE198214/new-image?object=".$num;
	if($db == "SGD") return "http://$db.yeastgenome.org/cgi-bin/locus.pl?locus=".$num;
	if($db == "ENZYME-$db") return "http://ca.expasy.org/cgi-bin/nicezyme.pl?".$num;
	if($db == "MIM") return "http://www.ncbi.nlm.nih.gov/entrez/dispomim.cgi?id=".$num;
	if($db == "LIGAND-MAP") return "http://www.genome.ad.jp/dbget-bin/show_pathway?".$num;
	if($db == "HIDB") return "http://www.tigr.org/docs/tigr-scripts/hi_scripts/hi_report.spl?hi_num=".$num;
	if($db == "ENSEMBL") return "http://www.ensembl.org/Homo_sapiens/Gene/Idhistory?g=".$num;
	if($db == "CRYPTODB") return "http://cryptodb.org/cryptodb/showRecord.do?name=GeneRecordClasses.GeneRecordClass&amp;id=".$num;
	if($db == "HOMINISDB") return "http://cryptodb.org/cryptodb/showRecord.do?name=GeneRecordClasses.GeneRecordClass&amp;id=".$num;
	if($db == "CYRPTODB") return "http://cryptodb.org/cryptodb/showRecord.do?name=GeneRecordClasses.GeneRecordClass&amp;id=".$num;
	if($db == "ASAP") return "http://asap.ahabs.wisc.edu/asap/feature_info.php?FeatureID=".$num;
	if($db == "PFAM") return "https://pfam.xfam.org/clan/".$num;
	if($db == "HUMANCYC") return "http://biocyc.org/HUMAN/NEW-IMAGE?type=PATHWAY&amp;object=".$num;
	if($db == "PLASMOCYC") return "http://biocyc.org/PLASMO/NEW-IMAGE?type=PATHWAY&amp;object=".$num;
	if($db == "ECOLIWIKI") return "http://ecoliwiki.net/colipedia/index.php/".$num;
	if($db == "MODBASE") return "https://modbase.compbio.ucsf.edu/modbase-cgi/model_search.cgi?databaseID=".$num;
	if($db == "Wikipedia") return "https://en.wikipedia.org/wiki/".$num;
	if($db == "CHEBI") return "http://www.ebi.ac.uk/chebi/searchId.do?chebiId=CHEBI:".$num;
	if($db == "BRENDA") return "http://www.brenda-enzymes.info/php/result_flat.php4?ecno=".$num;
	if($db == "ARACYC") return "http://www.arabidopsis.org:1555/ARA/NEW-IMAGE?type=PATHWAY&amp;object=".$num;
	if($db == "INTERPRO") return "http://www.ebi.ac.uk/interpro/IEntry?ac=".$num;
	if($db == "KNAPSACK") return "http://kanaya.naist.jp/knapsack_jsp/information.jsp?sname=C_ID&amp;word=".$num;
	if($db == "REACTOME") return "http://www.reactome.org/cgi-bin/link?SOURCE=Reactome&amp;ID=".$num;
	if($db == "SGN") return "http://www.sgn.cornell.edu/search/unigene.pl?unigene_id=".$num;
	if($db == "PIR") return "http://www.pir.uniprot.org/cgi-bin/searchpsd?id=".$num;
	return "";
}
function links($dblinks){
    // 列表
	if($dblinks=="") return "";
	$dblinks = explode(",,", $dblinks);
    $db = "";
    $num = "";
    $link = "";
    $linkhtml = "";
    foreach ($dblinks as $x){
		$x = str_replace("!", "\"", $x);
		$x = str_replace("(", "", $x);
		$x = str_replace(")", "", $x);
        $s = explode(" ", $x);
        $db = $s[0];
		$num = str_replace("\"", "", $s[1]);
        $link = getlink($db,$num);
        if($link) $linkhtml = $linkhtml . "<a href='". $link . "' >".$link."</a>"."<br>";
    }
	return $linkhtml;
}
?>