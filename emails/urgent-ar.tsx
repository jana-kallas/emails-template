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
        <div className="max-w-[600px] mx-auto" dir="rtl" >
        <Header
          header ="https://i.ibb.co/1G9nb11y/Email-2-AR-1.png"
          altText="Header"
        />
        <div className="px-3 font-public">
          <Welcome />
          <p >
            لقد انتهت المهلة المحدّدة لتقديم إثبات العنوان الخاص بك، ولم نتلقَّ الوثيقة المطلوبة حتّى الآن. وبناءً عليه، ووفقاً لالتزاماتنا التنظيميّة، تمّ فرض قيودٍ على حساب التداول الخاص بك إلى حين تقديم إثبات عنوانٍ صالح.
          </p>
          <p>
          قد تشمل القيود المطبَّقة، على سبيل المثال لا الحصر، وضع الحساب على نمط الإغلاق فقط، فرض قيودٍ على السحب، بالإضافة إلى إمكانيّة تعليق الحساب أو إغلاقه في حال لم يتمّ تقديم المستند المطلوب.
          </p>
          <p>
         لإزالة هذه القيود، يُرجى بشكلٍ عاجل تقديم إثبات عنوانٍ صالح صادر خلال الأشهر الثلاثة الماضية ويحمل اسمك الشخصي.
          </p>
          <div className="mb-8">
            <span className="font-bold">المستندات المقبولة تشمل</span>
            <ul>
              <li>	فاتورة خدمات (كهرباء، ماء، غاز)</li>
              <li>	فاتورة هاتف</li>
              <li>كشف حساب مصرفي</li>
              <li>	بوليصة تأمين تُظهر عنوان سكنك</li>
              <li>إفادة بلديّة أو كتاب صادر عن جهةٍ حكوميّة</li>
            </ul>
            <p>يُرجى إرسال إثبات العنوان مباشرةً إلى <a href="mailto:cs@4t.com" className="no-underline text-black">cs@4t.com</a> في أقرب وقتٍ ممكن. بمجرّد استلامه والتحقّق منه، سيتم رفع جميع القيود المطبّقة على حسابك.</p>
          </div>
          <Divider />
          <ContactBlock  
                      contactText="إذا كنت بحاجة إلى أي مساعدة، فلا تتردد في الاتصال بنا مباشرة. يسرّنا أن نساعدك"/>
          <Divider />
          <Footer
              footer1="4T Global LTD هي الشركة القابضة التي تمتلك الشركات التالي:"
              footer2="4T ليميتد مرخّصة ومنظمة من قبل هيئة الخدمات المالية في سيشيل (FSA) بموجب ترخيص رقم SD058. يقع المكتب التمثيلي لشركة 4T ليميتد في سيشيل، ماهي، فيكتوريا، مبنى أوليفييه مارادان، الطابق الأول.شركة 4T Markets Limited مرخّصة وخاضعة لتنظيم هيئة السلوك المالي – (FCA) FRN 624225. شركة 4T Markets Limited مسجّلة في إنجلترا وويلز تحت رقم الشركة 08891879، ويقع مقرها المسجّل في: Office 3.15، مبنى St. Clement's House، 27 Clement's Lane، لندن، EC4N 7AE. www.4T.co.uk"
              footer3="4T جلوبال ماركتس فايننشال سيرفيسز L.L.C مرخّصة من قبل هيئة الأوراق المالية والسلع في دولة الإمارات العربية المتحدة (SCA)، بموجب الترخيص رقم ٢٠٢٠٠٠٠٠٢٣٧."
              footer4="4T Technology GmbH، رقم التسجيل CHE 301.894.566، تقع في هينتربيرجستراسه 49، شتاينهاوزن 6312. زوغ – سويسرا."
              footer5="عتبر عقود الفروقات منتجات ذات رافعة مالية يمكن أن تؤدي إلى خسائر تفوق الودائع. يجب عليك فهم كيفية عمل التداول بالرافعة المالية قبل أن تقرر الاستثمار في أدوات الهامش (المارجن)."
              footer6="ينطوي تداول عقود الفروقات على مستوى عالٍ من المخاطر وقد لا يكون مناسبًا للجميع. لذا يرجى التأكد من فهم المخاطر التي المتضمنة قبل التداول."
              rights="©2025 4T. جميع الحقوق محفوظة"
            />
        </div>
        </div>
      </Html>
    </Tailwind>
  );
}
