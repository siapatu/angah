# 📱 UDID Fetcher - Cross-Platform Mobile UDID Retrieval

[![GitHub Repo](https://img.shields.io/badge/GitHub-Angah-blue?logo=github)](https://github.com/siapatu/Angah)
[![License](https://img.shields.io/badge/License-MIT-green)](LICENSE)
[![Status](https://img.shields.io/badge/Status-Production%20Ready-brightgreen)](STATUS.md)

Complete solution for retrieving iOS device UDIDs (Unique Device Identifiers) across multiple platforms.

## 🎯 Features

### Multi-Platform Support
- ✅ **iOS Native** - Swift app with UIKit
- ✅ **React Native** - Single codebase for iOS & Android
- ✅ **Flutter** - Cross-platform Dart implementation
- ✅ **Web** - Progressive Web App (PWA) for all browsers
- ✅ **Docker** - Containerized deployment

### Capabilities
- 🔐 Secure UDID retrieval via mobileconfig
- 📋 Copy to clipboard functionality
- 🔄 Real-time device information
- 📤 Submit to server infrastructure
- 🌐 Cross-device compatibility
- 📱 Mobile-optimized interfaces
- 🚀 Production-ready deployment

## 🚀 Quick Start

### Fastest Way to Get Running

```bash
# Clone repository
git clone https://github.com/siapatu/Angah.git
cd Angah

# Choose your platform

# Option 1: Web (Instant)
cd web/mobile
python3 -m http.server 3000
# Open http://localhost:3000

# Option 2: Docker (Full Stack)
docker-compose up -d
# Tomcat: http://localhost:8080
# Web: http://localhost:80

# Option 3: React Native
cd mobile/react-native
npm install
npm run ios  # or npm run android

# Option 4: Flutter
cd mobile/flutter
flutter pub get
flutter run

# Option 5: iOS Native
cd ios/UDIDFetcher
open UDIDFetcher.xcodeproj
# Build and run in Xcode
```

## 📁 Project Structure

```
Angah/
├── ios/
│   └── UDIDFetcher/           # iOS Native Swift app
│       ├── UDIDFetcher/
│       │   ├── AppDelegate.swift
│       │   ├── ViewController.swift
│       │   ├── UDIDManager.swift
│       │   └── Assets.xcassets
│       └── UDIDFetcher.xcodeproj
│
├── mobile/
│   ├── react-native/          # React Native app
│   │   ├── App.js
│   │   ├── package.json
│   │   ├── ios/
│   │   └── android/
│   │
│   └── flutter/               # Flutter app
│       ├── lib/
│       │   └── main.dart
│       ├── pubspec.yaml
│       ├── ios/
│       └── android/
│
├── web/
│   └── mobile/                # Web PWA
│       ├── index.html
│       ├── styles.css
│       ├── app.js
│       ├── manifest.json
│       └── sw.js
│
├── Java/
│   └── UDID/                  # Java backend server
│       ├── src/
│       │   └── org/skyfox/udid/
│       ├── WebContent/
│       ├── .classpath
│       └── .project
│
├── Docker/                    # Containerization
│   ├── Dockerfile
│   ├── docker-compose.yml
│   ├── nginx.conf
│   └── kubernetes.yaml
│
├── scripts/
│   ├── mobile-setup.sh
│   ├── mobile-deploy.ps1
│   └── start-mobile-server.sh
│
├── docs/
│   ├── MOBILE_SETUP_GUIDE.md
│   ├── DEPLOYMENT_GUIDE.md
│   └── API_REFERENCE.md
│
└── .github/
    └── workflows/
        └── build-and-deploy.yml
```

## 📚 Documentation

- **[Mobile Setup Guide](./docs/MOBILE_SETUP_GUIDE.md)** - Detailed setup for each platform
- **[Deployment Guide](./docs/DEPLOYMENT_GUIDE.md)** - Production deployment strategies
- **[API Reference](./docs/API_REFERENCE.md)** - Backend API documentation
- **[Contributing](./CONTRIBUTING.md)** - How to contribute

## 🛠️ Installation by Platform

### iOS Native
```bash
cd ios/UDIDFetcher
open UDIDFetcher.xcodeproj
# Configure signing in Xcode
# Build and run
```

### React Native
```bash
cd mobile/react-native
npm install
npm run ios
```

### Flutter
```bash
cd mobile/flutter
flutter pub get
flutter run
```

### Web
```bash
cd web/mobile
python3 -m http.server 8000
# Visit http://localhost:8000
```

### Docker
```bash
docker-compose up -d
# Services start automatically
```

## 🔧 Configuration

### Server Configuration
Edit `Java/UDID/WebContent/udid.mobileconfig` to update:
- Server URL endpoint
- Organization name
- Device attributes to collect

### Web Configuration
Edit `web/mobile/app.js` to update:
- API server URL
- Default timeout values
- Mobile config download URL

### Docker Configuration
Edit `docker-compose.yml` to update:
- Port mappings
- Environment variables
- Volume mounts

## 🧪 Testing

### Local Testing
```bash
# Web
cd web/mobile
python3 -m http.server 3000

# In another terminal
curl http://localhost:3000/index.html
```

### Device Testing
- **iOS Simulator**: `xcrun simctl list`
- **Android Emulator**: Android Studio SDK Manager
- **Physical Devices**: Connect via USB

## 📊 API Endpoints

```
GET /UDID/                    - Welcome page
GET /UDID/index.jsp           - Device info page
GET /UDID/udid.jsp            - UDID display page
POST /UDID/UDIDAction         - Receive device data
GET /UDID/udid.mobileconfig   - Mobile config file
```

## 🔐 Security

- ✅ HTTPS support
- ✅ Certificate pinning ready
- ✅ CORS configured
- ✅ Rate limiting enabled
- ✅ Input validation
- ✅ XSS protection

## 📱 Supported Devices

| Platform | Min Version | Status |
|----------|-------------|--------|
| iOS | 12.0+ | ✅ Tested |
| Android | 5.0+ | ✅ Tested |
| Web | All | ✅ Tested |
| macOS | 10.15+ | ✅ Tested |

## 🎓 Learn More

- [UIKit Documentation](https://developer.apple.com/documentation/uikit)
- [React Native Getting Started](https://reactnative.dev/docs/getting-started)
- [Flutter Documentation](https://flutter.dev/docs)
- [Web APIs](https://developer.mozilla.org/en-US/docs/Web/API)
- [Docker Guide](https://docs.docker.com/)

## 🤝 Contributing

Contributions are welcome! Please follow our [Contributing Guidelines](CONTRIBUTING.md).

### Development Setup
```bash
git clone https://github.com/siapatu/Angah.git
cd Angah
# Choose your platform and follow setup instructions
```

### Pull Request Process
1. Fork the repository
2. Create feature branch
3. Commit changes
4. Push to branch
5. Open Pull Request

## 📝 License

This project is licensed under the MIT License - see [LICENSE](LICENSE) file for details.

## ⚖️ Legal Disclaimer

UDID retrieval should only be used for authorized device management purposes. Users must comply with:
- App Store Guidelines
- GDPR and privacy regulations
- Local data protection laws
- Apple's terms of service

## 👨‍💻 Author

**siapatu** - [GitHub Profile](https://github.com/siapatu)

## 🙏 Acknowledgments

Built on top of the iOS UDID Safari project by [shaojiankui](https://github.com/shaojiankui/iOS-UDID-Safari).

## 📞 Support

- 📧 Email: support@example.com
- 💬 GitHub Issues: [Report Bug](https://github.com/siapatu/Angah/issues)
- 📖 Wiki: [Project Wiki](https://github.com/siapatu/Angah/wiki)

## 🗺️ Roadmap

- [ ] Add Android native implementation
- [ ] Implement WebRTC for direct device communication
- [ ] Add analytics dashboard
- [ ] Create mobile app distribution system
- [ ] Add push notification support
- [ ] Implement device fingerprinting
- [ ] Add REST API documentation

---

**Version**: 1.0.0  
**Last Updated**: 2026-04-30  
**Status**: Production Ready ✅
