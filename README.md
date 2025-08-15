# 🚗 Chancela Automática com Reconhecimento de Placas

## 📌 Introdução
A crescente demanda por **segurança** e **agilidade** no controle de acesso a estacionamentos, condomínios e áreas restritas impulsiona o uso de soluções tecnológicas avançadas.  
Este Trabalho de Conclusão de Curso propõe o desenvolvimento de um **sistema de chancela automática** utilizando **reconhecimento óptico de caracteres (OCR)** para leitura de placas veiculares, integrando técnicas de **Visão Computacional** e **Internet das Coisas (IoT)**.  

O projeto busca oferecer:
- **Eficiência operacional** na gestão de acessos.
- **Redução de custos** com processos manuais.
- **Experiência fluida** para o usuário, minimizando o tempo de espera.

---

## 🎯 Objetivos
- Automatizar a abertura de chancelas por meio de leitura e reconhecimento de placas.
- Integrar hardware e software para controle de acesso seguro e eficiente.
- Garantir baixo tempo de resposta (menos de 2 segundos para abertura).
- Utilizar algoritmos de visão computacional em cenários reais.

---

## 🛠 Tecnologias Utilizadas
- **Linguagem**: Python  
- **Visão Computacional**: OpenCV  
- **OCR**: EasyOCR / Tesseract  
- **Controle de Hardware**: ESP32 Wi-Fi / Bluetooth  
- **Banco de Dados**: MySQL / SQLite  
- **Comunicação**: HTTP ou MQTT  

---

## 🧩 Arquitetura do Sistema
```mermaid
flowchart LR
    A[Câmera Captura Imagem] --> B[Processamento com OpenCV]
    B --> C[Extração de Texto com OCR]
    C --> D[Validação no Banco de Dados]
    D -- Autorizado --> E[ESP32 Aciona Chancela]
    D -- Não Autorizado --> F[Negar Acesso]

