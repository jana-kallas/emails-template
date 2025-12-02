import { Html } from "@react-email/components";
import { Tailwind } from "@react-email/tailwind";
import * as React from "react";
import Header from "../components/header";
import ContactBlock from "../components/contact-block";
import Divider from "../components/divider";
import Footer from "../components/footer";
import Welcome from "../components/welcome";
// eslint-disable-next-line @typescript-eslint/no-var-requires -- tailwind config is CJS
const tailwindConfig = require("../tailwind.config");
export default function Email() {
  return (
    <Tailwind config={tailwindConfig}>
      <Html>
        <div className="max-w-[600px] mx-auto">
          <Header
            header="https://i.ibb.co/bj42gd4W/Email-1-FR.png"
            altText="Header"
          />
          <div className="px-3 font-public">
            <Welcome />
            <p>
              Veuillez noter que votre justificatif de domicile est toujours en
              cours de traitement. Conformément à nos obligations
              réglementaires, vous devez fournir un justificatif de domicile
              valide, datant de moins de 3 mois et établi à votre nom.
            </p>
            <div className="mb-8">
              <span className="font-bold">
                Les documents acceptés sont les suivants:
              </span>
              <ul>
                <li>Facture de services publics (électricité, eau, gaz)</li>
                <li>Facture de téléphone</li>
                <li>Relevé bancaire</li>
                <li>
                  Attestation d’assurance indiquant votre adresse de domicile
                </li>
                <li>
                  Attestation de domicile délivrée par la mairie ou lettre
                  officielle
                </li>
              </ul>
              <p>
                Nous vous prions de bien vouloir nous faire parvenir le document
                requis dans un délai de deux semaines à compter de la date de ce
                courriel. À défaut, votre compte pourrait être soumis à des
                restrictions, notamment la mise en mode « fermeture uniquement
                », des limitations de retrait, voire la suspension ou la
                fermeture de votre compte jusqu’à la vérification du
                justificatif.
              </p>
              <p>
                Ces mesures font partie de nos exigences standard en matière de
                connaissance du client (KYC) et de lutte contre le blanchiment
                d’argent et le financement du terrorisme (LCB-FT).
              </p>
              <p>
                Vous pouvez envoyer votre justificatif de domicile directement à
                l’adresse{" "}
                <a href="mailto:cs@4t.com" className="no-underline text-black">
                  cs@4t.com.
                </a>
              </p>
            </div>
            <Divider />
            <ContactBlock contactText="Pour toute assistance supplémentaire, veuillez contacter notre équipe à tout moment au:" />
            <Divider />
            <Footer
              footer1="4T Global (Chypre) LTD est la société holding possédant les sociétés suivantes :"
              footer2="4T est autorisée et réglementée par L’Autorité des Services Financiers des Seychelles ( (FSA) sous le numéro de licence SD058. Le bureau de représentation de 4T Limited est situé aux Seychelles, Mahe, Victoria, Immeuble Olivier Maradan, 1er étage. ‪+2484322955‬. www.4T.com 4T Limited n’offre pas ses services aux résidents de certaines juridictions. Veuillez consulter les Pays Restreints."
              footer3="4T Markets Limited est autorisée et réglementée par la Financial Conduct Authority – (FCA) FRN 624225.4T Markets Limited est enregistrée en Angleterre et au Pays de Galles sous le numéro de société 08891879, avec son siège social à : Office 3.15, St. Clement's House, 27 Clement's Lane, EC4N 7AE, Londres. www.4T.co.uk"
              footer4="4T Global Markets Financial Services L.L.C est agréée par l’Autorité des valeurs mobilières et des matières premières des Émirats arabes unis (SCA), numéro de licence : 20200000237."
              footer5="4T Technology GmbH, no. d’enregistrement CHE-301.894.566, située à Hinterbergstrasse 49, 6312 Steinhausen, ZUG, Suisse."
              footer6="Les contrats de différences (CFD) sont produits à effet de levier qui peuvent entraîner des pertes supérieures aux dépôts. Vous devez comprendre comment le fonctionnement du trading à effet de levier avant de décider d’investir dans des instruments de marge.
CFD trading comporte un niveau de risque élevé et peut ne pas convenir à tout le monde. Veuillez donc vous assurer de bien comprendre les risques impliqués avant de trader."
              rights="©2025 4T. Tous droits réservés."
            />
          </div>
        </div>
      </Html>
    </Tailwind>
  );
}
